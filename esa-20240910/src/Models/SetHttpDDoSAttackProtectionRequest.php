<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class SetHttpDDoSAttackProtectionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example default
     *
     * @var string
     */
    public $globalMode;

    /**
     * @description This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'globalMode' => 'GlobalMode',
        'siteId'     => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalMode) {
            $res['GlobalMode'] = $this->globalMode;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetHttpDDoSAttackProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalMode'])) {
            $model->globalMode = $map['GlobalMode'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
