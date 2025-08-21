<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class CancelInstancePublishTaskResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $bizTypeList;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $error;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $response;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bizTypeList' => 'BizTypeList',
        'createTime' => 'CreateTime',
        'error' => 'Error',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'requestId' => 'RequestId',
        'response' => 'Response',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->bizTypeList)) {
            Model::validateArray($this->bizTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTypeList) {
            if (\is_array($this->bizTypeList)) {
                $res['BizTypeList'] = [];
                $n1 = 0;
                foreach ($this->bizTypeList as $item1) {
                    $res['BizTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BizTypeList'])) {
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = [];
                $n1 = 0;
                foreach ($map['BizTypeList'] as $item1) {
                    $model->bizTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
