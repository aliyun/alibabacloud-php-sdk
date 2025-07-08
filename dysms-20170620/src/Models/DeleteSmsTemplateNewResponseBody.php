<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteSmsTemplateNewResponseBody\failList;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteSmsTemplateNewResponseBody\successList;

class DeleteSmsTemplateNewResponseBody extends Model
{
    /**
     * @var failList
     */
    public $failList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var successList
     */
    public $successList;
    protected $_name = [
        'failList' => 'FailList',
        'requestId' => 'RequestId',
        'successList' => 'SuccessList',
    ];

    public function validate()
    {
        if (null !== $this->failList) {
            $this->failList->validate();
        }
        if (null !== $this->successList) {
            $this->successList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failList) {
            $res['FailList'] = null !== $this->failList ? $this->failList->toArray($noStream) : $this->failList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successList) {
            $res['SuccessList'] = null !== $this->successList ? $this->successList->toArray($noStream) : $this->successList;
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
        if (isset($map['FailList'])) {
            $model->failList = failList::fromMap($map['FailList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessList'])) {
            $model->successList = successList::fromMap($map['SuccessList']);
        }

        return $model;
    }
}
