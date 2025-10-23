<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class CheckDisposableResponseBody extends Model
{
    /**
     * @var string
     */
    public $isDisposable;

    /**
     * @var string
     */
    public $isFormatValid;

    /**
     * @var string
     */
    public $isMxValid;

    /**
     * @var string
     */
    public $isOkToSend;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isDisposable' => 'IsDisposable',
        'isFormatValid' => 'IsFormatValid',
        'isMxValid' => 'IsMxValid',
        'isOkToSend' => 'IsOkToSend',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDisposable) {
            $res['IsDisposable'] = $this->isDisposable;
        }

        if (null !== $this->isFormatValid) {
            $res['IsFormatValid'] = $this->isFormatValid;
        }

        if (null !== $this->isMxValid) {
            $res['IsMxValid'] = $this->isMxValid;
        }

        if (null !== $this->isOkToSend) {
            $res['IsOkToSend'] = $this->isOkToSend;
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
        if (isset($map['IsDisposable'])) {
            $model->isDisposable = $map['IsDisposable'];
        }

        if (isset($map['IsFormatValid'])) {
            $model->isFormatValid = $map['IsFormatValid'];
        }

        if (isset($map['IsMxValid'])) {
            $model->isMxValid = $map['IsMxValid'];
        }

        if (isset($map['IsOkToSend'])) {
            $model->isOkToSend = $map['IsOkToSend'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
