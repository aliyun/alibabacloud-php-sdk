<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GroupInvokeFlowRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length.
     *
     * @example abcdefghijklmn
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The information required by the group execution. Set this parameter to a JSON array of strings in the following format:`{"Items": []}`. Each string provides the information required by one time of execution. The string must use the format of the Data parameter in the InvokeFlow operation.
     *
     * @example {\"Items\":[{\"resourceId\":\"i-bp1383wskmaa65duviwh\",\"regionId\":\"cn-hangzhou\",\"resourceType\":\"ACS::ECS::Instance\"}],\"Source\":\"CloudConfig\"}
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the workflow that you want to execute.
     *
     * @example lc-uf6axpwfcw4ubx
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The name of the group. The name must be unique among the groups.
     *
     * @example 1632117849243
     *
     * @var string
     */
    public $groupKey;

    /**
     * @description The tag that is attached to each time of execution. The value is a JSON array. The number of tags in the array is the same as the value of the TotalCount parameter.
     *
     * @example [{\"key1\":\"value1\",\"key2\":\"value2\"}]
     *
     * @var string
     */
    public $tags;

    /**
     * @description The number of times of execution. The value must be the same as the number of strings in the value of the Data parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'data'        => 'Data',
        'flowId'      => 'FlowId',
        'groupKey'    => 'GroupKey',
        'tags'        => 'Tags',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->groupKey) {
            $res['GroupKey'] = $this->groupKey;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GroupInvokeFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['GroupKey'])) {
            $model->groupKey = $map['GroupKey'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
