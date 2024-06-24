<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class CreateQuotaPlanRequest extends Model
{
    /**
     * @description The request body parameters.
     *
     * @example { "name": "planA", // The quota is a level-1 quota. You can select only the fields that are related to the quota plan. "quota": { "name": "a", "nickName": "aaa_nick", "tenantId": "10001", "regionId": "cn-hangzhou", "parentId": "0", "cluster": "AT-ODPS-TEST3", "parameter": { "minCU": 40, "maxCU": 40, "adhocCU": 0, "elasticMinCU": 40, "elasticMaxCU": 40, "enablePreemptiveScheduling": false, "forceReservedMin":true, "enablePriority":false, "singleJobCULimit":100, "adhocQuotaBeginTimeInSec": 1345, "adhocQuotaEndTimeInSec": 1234, "ignoreAdhocQuota":false }, "subQuotaInfoList": [ { "nickName": "WlmFuxiSecondaryOnlineQuotaTest", "name": "WlmFuxiSecondaryOnlineQuotaTest", "type": "FUXI_ONLINE", "tenantId": "10001", "regionId": "cn-hangzhou", "cluster": "AT-ODPS-TEST3", "parameter": { "minCU": 40, "maxCU": 40, "adhocCU": 0, "elasticMinCU": 40, "elasticMaxCU": 40, "enablePreemptiveScheduling": false, "forceReservedMin":true, "enablePriority":false, "singleJobCULimit":100, "adhocQuotaBeginTimeInSec": 1345, "adhocQuotaEndTimeInSec": 1234, "ignoreAdhocQuota":false } } ] } }
     *
     * @var string
     */
    public $body;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the tenant.
     *
     * @example 228451885265153
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'body'     => 'body',
        'region'   => 'region',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQuotaPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
