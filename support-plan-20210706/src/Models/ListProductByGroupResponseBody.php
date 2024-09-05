<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class ListProductByGroupResponseBody extends Model
{
    /**
     * @description code
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description data
     *
     * @example [     {       "wfNodeId": "dealingNode",//任务单状态       "createEmpId": null,//创建人工号，可以忽略       "createTime": 1637571435000,//任务单创建时间       "orderId": "E2111221H1UKCZ",//任务单号       "isImportant": "normal",//是否紧急       "closeTime": null,//任务单关单时间       "taskTitle": "测试单16点44",//标题       "productType": "3270"//问题分类     },     {       "wfNodeId": "dealingNode",       "createEmpId": null,       "createTime": 1637820497000,       "orderId": "E211125CG111EM",       "isImportant": "normal",       "closeTime": null,       "taskTitle": "测试单14",       "class": "com.aliyun.dingtalklanding.dto.OpenTaskOrderDTO",       "productType": "3270"     }   ]
     *
     * @var string
     */
    public $data;

    /**
     * @description msg
     *
     * @example 请求成功
     *
     * @var string
     */
    public $message;

    /**
     * @description requestId
     *
     * @example 123
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductByGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
