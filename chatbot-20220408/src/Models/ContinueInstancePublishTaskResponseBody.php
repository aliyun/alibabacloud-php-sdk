<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class ContinueInstancePublishTaskResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $bizTypeList;

    /**
     * @example 2022-04-12T06:30:17Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $error;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $errors;

    /**
     * @example 8522
     *
     * @var int
     */
    public $id;

    /**
     * @example 2022-04-12T06:30:33Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 5CBF0581-EAE7-1DC4-95C6-A089656A1E2D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 8522
     *
     * @var string
     */
    public $response;

    /**
     * @example FE_RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example {         "category_bind_faq": [             "以下类目没有发布到正式环境: 项目交付信息汇总"         ]     }
     *
     * @var mixed[]
     */
    public $warnings;
    protected $_name = [
        'bizTypeList' => 'BizTypeList',
        'createTime'  => 'CreateTime',
        'error'       => 'Error',
        'errors'      => 'Errors',
        'id'          => 'Id',
        'modifyTime'  => 'ModifyTime',
        'requestId'   => 'RequestId',
        'response'    => 'Response',
        'status'      => 'Status',
        'warnings'    => 'Warnings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypeList) {
            $res['BizTypeList'] = $this->bizTypeList;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->errors) {
            $res['Errors'] = $this->errors;
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
            $res['Warnings'] = $this->warnings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinueInstancePublishTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypeList'])) {
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = $map['BizTypeList'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Errors'])) {
            $model->errors = $map['Errors'];
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
            $model->warnings = $map['Warnings'];
        }

        return $model;
    }
}
