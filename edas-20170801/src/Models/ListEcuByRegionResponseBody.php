<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcuByRegionResponseBody\ecuEntityList;

class ListEcuByRegionResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var ecuEntityList
     */
    public $ecuEntityList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'ecuEntityList' => 'EcuEntityList',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ecuEntityList) {
            $this->ecuEntityList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->ecuEntityList) {
            $res['EcuEntityList'] = null !== $this->ecuEntityList ? $this->ecuEntityList->toArray($noStream) : $this->ecuEntityList;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['EcuEntityList'])) {
            $model->ecuEntityList = ecuEntityList::fromMap($map['EcuEntityList']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
