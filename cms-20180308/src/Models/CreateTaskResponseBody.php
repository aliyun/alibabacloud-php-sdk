<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateTaskResponseBody\createResultList;

class CreateTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $alertRule;

    /**
     * @var string
     */
    public $code;

    /**
     * @var createResultList
     */
    public $createResultList;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'alertRule' => 'AlertRule',
        'code' => 'Code',
        'createResultList' => 'CreateResultList',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->createResultList) {
            $this->createResultList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRule) {
            $res['AlertRule'] = $this->alertRule;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->createResultList) {
            $res['CreateResultList'] = null !== $this->createResultList ? $this->createResultList->toArray($noStream) : $this->createResultList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertRule'])) {
            $model->alertRule = $map['AlertRule'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CreateResultList'])) {
            $model->createResultList = createResultList::fromMap($map['CreateResultList']);
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
