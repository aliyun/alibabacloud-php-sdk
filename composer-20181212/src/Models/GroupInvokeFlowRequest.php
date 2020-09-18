<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GroupInvokeFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $groupKey;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'flowId'      => 'FlowId',
        'groupKey'    => 'GroupKey',
        'data'        => 'Data',
        'clientToken' => 'ClientToken',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
        Model::validateRequired('flowId', $this->flowId, true);
        Model::validateRequired('groupKey', $this->groupKey, true);
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->groupKey) {
            $res['GroupKey'] = $this->groupKey;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['GroupKey'])) {
            $model->groupKey = $map['GroupKey'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
