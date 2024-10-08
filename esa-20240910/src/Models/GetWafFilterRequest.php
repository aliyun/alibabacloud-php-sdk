<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetWafFilterRequest extends Model
{
    /**
     * @example http_bot
     *
     * @var string
     */
    public $phase;

    /**
     * @example 1
     *
     * @var int
     */
    public $siteId;

    /**
     * @example characteristics
     *
     * @var string
     */
    public $target;

    /**
     * @example http_custom_cc
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'phase'  => 'Phase',
        'siteId' => 'SiteId',
        'target' => 'Target',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWafFilterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
