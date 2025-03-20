<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSeoBypassRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
     * @description This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'enable' => 'Enable',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSeoBypassRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
