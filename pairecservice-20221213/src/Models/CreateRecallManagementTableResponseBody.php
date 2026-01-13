<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateRecallManagementTableResponseBody extends Model
{
    /**
     * @var string
     */
    public $recallManagementTableId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recallManagementTableId' => 'RecallManagementTableId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recallManagementTableId) {
            $res['RecallManagementTableId'] = $this->recallManagementTableId;
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
        if (isset($map['RecallManagementTableId'])) {
            $model->recallManagementTableId = $map['RecallManagementTableId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
