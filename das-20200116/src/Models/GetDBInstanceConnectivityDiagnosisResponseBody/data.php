<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetDBInstanceConnectivityDiagnosisResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $connCheckErrorCode;

    /**
     * @var string
     */
    public $connCheckErrorMessage;

    /**
     * @var string
     */
    public $failType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'connCheckErrorCode' => 'connCheckErrorCode',
        'connCheckErrorMessage' => 'connCheckErrorMessage',
        'failType' => 'failType',
        'instanceId' => 'instanceId',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connCheckErrorCode) {
            $res['connCheckErrorCode'] = $this->connCheckErrorCode;
        }

        if (null !== $this->connCheckErrorMessage) {
            $res['connCheckErrorMessage'] = $this->connCheckErrorMessage;
        }

        if (null !== $this->failType) {
            $res['failType'] = $this->failType;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['connCheckErrorCode'])) {
            $model->connCheckErrorCode = $map['connCheckErrorCode'];
        }

        if (isset($map['connCheckErrorMessage'])) {
            $model->connCheckErrorMessage = $map['connCheckErrorMessage'];
        }

        if (isset($map['failType'])) {
            $model->failType = $map['failType'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
