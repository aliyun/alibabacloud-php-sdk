<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceQuotasRequest extends Model
{
    /**
     * @example sp-xcdn-96wblslz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example preload, free_cert
     *
     * @var string
     */
    public $quotaNames;

    /**
     * @example 2882900****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'quotaNames' => 'QuotaNames',
        'siteId'     => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->quotaNames) {
            $res['QuotaNames'] = $this->quotaNames;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceQuotasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QuotaNames'])) {
            $model->quotaNames = $map['QuotaNames'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
