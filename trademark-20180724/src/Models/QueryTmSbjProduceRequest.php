<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTmSbjProduceRequest extends Model
{
    /**
     * @var string
     */
    public $highPriorityBizTypeStr;

    /**
     * @var string
     */
    public $highPriorityMaterialNameStr;

    /**
     * @var string
     */
    public $highPriorityOrderIdStr;

    /**
     * @var string
     */
    public $highPriorityUserIdStr;

    /**
     * @var string
     */
    public $principalKey;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $producerType;

    /**
     * @var int
     */
    public $queryOrderPageSize;
    protected $_name = [
        'highPriorityBizTypeStr'      => 'HighPriorityBizTypeStr',
        'highPriorityMaterialNameStr' => 'HighPriorityMaterialNameStr',
        'highPriorityOrderIdStr'      => 'HighPriorityOrderIdStr',
        'highPriorityUserIdStr'       => 'HighPriorityUserIdStr',
        'principalKey'                => 'PrincipalKey',
        'principalName'               => 'PrincipalName',
        'producerType'                => 'ProducerType',
        'queryOrderPageSize'          => 'QueryOrderPageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->highPriorityBizTypeStr) {
            $res['HighPriorityBizTypeStr'] = $this->highPriorityBizTypeStr;
        }
        if (null !== $this->highPriorityMaterialNameStr) {
            $res['HighPriorityMaterialNameStr'] = $this->highPriorityMaterialNameStr;
        }
        if (null !== $this->highPriorityOrderIdStr) {
            $res['HighPriorityOrderIdStr'] = $this->highPriorityOrderIdStr;
        }
        if (null !== $this->highPriorityUserIdStr) {
            $res['HighPriorityUserIdStr'] = $this->highPriorityUserIdStr;
        }
        if (null !== $this->principalKey) {
            $res['PrincipalKey'] = $this->principalKey;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->producerType) {
            $res['ProducerType'] = $this->producerType;
        }
        if (null !== $this->queryOrderPageSize) {
            $res['QueryOrderPageSize'] = $this->queryOrderPageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTmSbjProduceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HighPriorityBizTypeStr'])) {
            $model->highPriorityBizTypeStr = $map['HighPriorityBizTypeStr'];
        }
        if (isset($map['HighPriorityMaterialNameStr'])) {
            $model->highPriorityMaterialNameStr = $map['HighPriorityMaterialNameStr'];
        }
        if (isset($map['HighPriorityOrderIdStr'])) {
            $model->highPriorityOrderIdStr = $map['HighPriorityOrderIdStr'];
        }
        if (isset($map['HighPriorityUserIdStr'])) {
            $model->highPriorityUserIdStr = $map['HighPriorityUserIdStr'];
        }
        if (isset($map['PrincipalKey'])) {
            $model->principalKey = $map['PrincipalKey'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['ProducerType'])) {
            $model->producerType = $map['ProducerType'];
        }
        if (isset($map['QueryOrderPageSize'])) {
            $model->queryOrderPageSize = $map['QueryOrderPageSize'];
        }

        return $model;
    }
}
