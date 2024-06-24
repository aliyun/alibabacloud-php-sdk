<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class CreateQuotaScheduleRequest extends Model
{
    /**
     * @description The request body parameters.
     *
     * @example \\# The quota plan immediately takes effect. [ { "type": "once", "plan": "planA", "operator":"xxx" } ] # The quota plan is scheduled on a regular basis. [ { "id": "bi", "type": "daily", "condition": { "at": "0800", "after": "2022-04-25T04:23:04Z" // optional }, "plan": "planA" }, { "id": "bi", "type": "daily", "condition": { "at": "0900", "after": "2022-04-25T04:23:04Z" // optional }, "plan": "planB" }, ]
     *
     * @var string
     */
    public $body;

    /**
     * @description The ID of the region.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the tenant.
     *
     * @example 407137536592384
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
     * @return CreateQuotaScheduleRequest
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
