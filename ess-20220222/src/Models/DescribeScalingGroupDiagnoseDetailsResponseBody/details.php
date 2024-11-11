<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDiagnoseDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @example SecurityGroup
     *
     * @var string
     */
    public $diagnoseType;

    /**
     * @example AccountArrearage
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example sg-280ih****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'diagnoseType' => 'DiagnoseType',
        'errorCode'    => 'ErrorCode',
        'resourceId'   => 'ResourceId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnoseType) {
            $res['DiagnoseType'] = $this->diagnoseType;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseType'])) {
            $model->diagnoseType = $map['DiagnoseType'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
