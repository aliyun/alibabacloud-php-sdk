<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsResponseBody\serviceConnections;

class ListServiceConnectionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var serviceConnections[]
     */
    public $serviceConnections;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'          => 'errorCode',
        'errorMessage'       => 'errorMessage',
        'requestId'          => 'requestId',
        'serviceConnections' => 'serviceConnections',
        'success'            => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->serviceConnections)) {
            Model::validateArray($this->serviceConnections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->serviceConnections) {
            if (\is_array($this->serviceConnections)) {
                $res['serviceConnections'] = [];
                $n1                        = 0;
                foreach ($this->serviceConnections as $item1) {
                    $res['serviceConnections'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['serviceConnections'])) {
            if (!empty($map['serviceConnections'])) {
                $model->serviceConnections = [];
                $n1                        = 0;
                foreach ($map['serviceConnections'] as $item1) {
                    $model->serviceConnections[$n1++] = serviceConnections::fromMap($item1);
                }
            }
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
