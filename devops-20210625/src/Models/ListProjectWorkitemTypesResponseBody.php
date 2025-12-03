<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectWorkitemTypesResponseBody\workitemTypes;

class ListProjectWorkitemTypesResponseBody extends Model
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
     * @var bool
     */
    public $success;

    /**
     * @var workitemTypes[]
     */
    public $workitemTypes;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'requestId' => 'requestId',
        'success' => 'success',
        'workitemTypes' => 'workitemTypes',
    ];

    public function validate()
    {
        if (\is_array($this->workitemTypes)) {
            Model::validateArray($this->workitemTypes);
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

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->workitemTypes) {
            if (\is_array($this->workitemTypes)) {
                $res['workitemTypes'] = [];
                $n1 = 0;
                foreach ($this->workitemTypes as $item1) {
                    $res['workitemTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['workitemTypes'])) {
            if (!empty($map['workitemTypes'])) {
                $model->workitemTypes = [];
                $n1 = 0;
                foreach ($map['workitemTypes'] as $item1) {
                    $model->workitemTypes[$n1] = workitemTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
