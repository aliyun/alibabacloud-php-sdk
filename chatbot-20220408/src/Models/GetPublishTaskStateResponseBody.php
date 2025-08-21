<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class GetPublishTaskStateResponseBody extends Model
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
     * @var mixed[]
     */
    public $errors;

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

    /**
     * @var mixed[]
     */
    public $warnings;
    protected $_name = [
        'bizTypeList' => 'BizTypeList',
        'createTime' => 'CreateTime',
        'error' => 'Error',
        'errors' => 'Errors',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'requestId' => 'RequestId',
        'response' => 'Response',
        'status' => 'Status',
        'warnings' => 'Warnings',
    ];

    public function validate()
    {
        if (\is_array($this->bizTypeList)) {
            Model::validateArray($this->bizTypeList);
        }
        if (\is_array($this->errors)) {
            Model::validateArray($this->errors);
        }
        if (\is_array($this->warnings)) {
            Model::validateArray($this->warnings);
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

        if (null !== $this->errors) {
            if (\is_array($this->errors)) {
                $res['Errors'] = [];
                foreach ($this->errors as $key1 => $value1) {
                    $res['Errors'][$key1] = $value1;
                }
            }
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

        if (null !== $this->warnings) {
            if (\is_array($this->warnings)) {
                $res['Warnings'] = [];
                foreach ($this->warnings as $key1 => $value1) {
                    $res['Warnings'][$key1] = $value1;
                }
            }
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

        if (isset($map['Errors'])) {
            if (!empty($map['Errors'])) {
                $model->errors = [];
                foreach ($map['Errors'] as $key1 => $value1) {
                    $model->errors[$key1] = $value1;
                }
            }
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

        if (isset($map['Warnings'])) {
            if (!empty($map['Warnings'])) {
                $model->warnings = [];
                foreach ($map['Warnings'] as $key1 => $value1) {
                    $model->warnings[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
