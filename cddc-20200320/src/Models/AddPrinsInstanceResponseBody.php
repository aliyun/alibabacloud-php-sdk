<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;

class AddPrinsInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $custInstanceId;

    /**
     * @var string
     */
    public $custInstanceName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'custInstanceId' => 'CustInstanceId',
        'custInstanceName' => 'CustInstanceName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->custInstanceId) {
            $res['CustInstanceId'] = $this->custInstanceId;
        }

        if (null !== $this->custInstanceName) {
            $res['CustInstanceName'] = $this->custInstanceName;
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
        if (isset($map['CustInstanceId'])) {
            $model->custInstanceId = $map['CustInstanceId'];
        }

        if (isset($map['CustInstanceName'])) {
            $model->custInstanceName = $map['CustInstanceName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
