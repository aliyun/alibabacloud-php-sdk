<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateMergeFaceGroupsJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $groupIdFrom;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $groupIdTo;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'groupIdFrom' => 'GroupIdFrom',
        'jobType'     => 'JobType',
        'requestId'   => 'RequestId',
        'setId'       => 'SetId',
        'groupIdTo'   => 'GroupIdTo',
        'jobId'       => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIdFrom) {
            $res['GroupIdFrom'] = $this->groupIdFrom;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->groupIdTo) {
            $res['GroupIdTo'] = $this->groupIdTo;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMergeFaceGroupsJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIdFrom'])) {
            $model->groupIdFrom = $map['GroupIdFrom'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['GroupIdTo'])) {
            $model->groupIdTo = $map['GroupIdTo'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
