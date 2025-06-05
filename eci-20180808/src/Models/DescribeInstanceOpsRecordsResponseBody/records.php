<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeInstanceOpsRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $opsStatus;

    /**
     * @var string
     */
    public $opsType;

    /**
     * @var string
     */
    public $resultContent;

    /**
     * @var string
     */
    public $resultType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'expireTime' => 'ExpireTime',
        'opsStatus' => 'OpsStatus',
        'opsType' => 'OpsType',
        'resultContent' => 'ResultContent',
        'resultType' => 'ResultType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->opsStatus) {
            $res['OpsStatus'] = $this->opsStatus;
        }

        if (null !== $this->opsType) {
            $res['OpsType'] = $this->opsType;
        }

        if (null !== $this->resultContent) {
            $res['ResultContent'] = $this->resultContent;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['OpsStatus'])) {
            $model->opsStatus = $map['OpsStatus'];
        }

        if (isset($map['OpsType'])) {
            $model->opsType = $map['OpsType'];
        }

        if (isset($map['ResultContent'])) {
            $model->resultContent = $map['ResultContent'];
        }

        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        return $model;
    }
}
