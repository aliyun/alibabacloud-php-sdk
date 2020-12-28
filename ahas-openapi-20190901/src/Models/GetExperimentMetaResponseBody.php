<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class GetExperimentMetaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'requestId'    => 'RequestId',
        'message'      => 'Message',
        'state'        => 'State',
        'experimentId' => 'ExperimentId',
        'createTime'   => 'CreateTime',
        'code'         => 'Code',
        'success'      => 'Success',
        'tags'         => 'Tags',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExperimentMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
