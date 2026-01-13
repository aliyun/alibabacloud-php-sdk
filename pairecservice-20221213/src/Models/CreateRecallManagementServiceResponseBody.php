<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateRecallManagementServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $recallManagementServiceId;

    /**
     * @var string
     */
    public $recallManagementServiceVersionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recallManagementServiceId' => 'RecallManagementServiceId',
        'recallManagementServiceVersionId' => 'RecallManagementServiceVersionId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recallManagementServiceId) {
            $res['RecallManagementServiceId'] = $this->recallManagementServiceId;
        }

        if (null !== $this->recallManagementServiceVersionId) {
            $res['RecallManagementServiceVersionId'] = $this->recallManagementServiceVersionId;
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
        if (isset($map['RecallManagementServiceId'])) {
            $model->recallManagementServiceId = $map['RecallManagementServiceId'];
        }

        if (isset($map['RecallManagementServiceVersionId'])) {
            $model->recallManagementServiceVersionId = $map['RecallManagementServiceVersionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
