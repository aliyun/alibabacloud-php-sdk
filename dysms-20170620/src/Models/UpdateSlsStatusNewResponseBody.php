<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class UpdateSlsStatusNewResponseBody extends Model
{
    /**
     * @var bool
     */
    public $authorizeStatus;

    /**
     * @var bool
     */
    public $openStatus;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $saveTime;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'authorizeStatus' => 'AuthorizeStatus',
        'openStatus' => 'OpenStatus',
        'prodCode' => 'ProdCode',
        'requestId' => 'RequestId',
        'saveTime' => 'SaveTime',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizeStatus) {
            $res['AuthorizeStatus'] = $this->authorizeStatus;
        }

        if (null !== $this->openStatus) {
            $res['OpenStatus'] = $this->openStatus;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->saveTime) {
            $res['SaveTime'] = $this->saveTime;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['AuthorizeStatus'])) {
            $model->authorizeStatus = $map['AuthorizeStatus'];
        }

        if (isset($map['OpenStatus'])) {
            $model->openStatus = $map['OpenStatus'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SaveTime'])) {
            $model->saveTime = $map['SaveTime'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
