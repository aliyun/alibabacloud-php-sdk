<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ListMainScenesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $objectString;
    protected $_name = [
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'errMessage'   => 'ErrMessage',
        'data'         => 'Data',
        'objectString' => 'ObjectString',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('errMessage', $this->errMessage, true);
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('objectString', $this->objectString, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->objectString) {
            $res['ObjectString'] = $this->objectString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMainScenesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ObjectString'])) {
            $model->objectString = $map['ObjectString'];
        }

        return $model;
    }
}
