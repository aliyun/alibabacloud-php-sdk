<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DeleteRoutineEnvironmentVariablesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $deletedKeys;

    /**
     * @var string[]
     */
    public $failedKeys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deletedKeys' => 'DeletedKeys',
        'failedKeys' => 'FailedKeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->deletedKeys)) {
            Model::validateArray($this->deletedKeys);
        }
        if (\is_array($this->failedKeys)) {
            Model::validateArray($this->failedKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletedKeys) {
            if (\is_array($this->deletedKeys)) {
                $res['DeletedKeys'] = [];
                $n1 = 0;
                foreach ($this->deletedKeys as $item1) {
                    $res['DeletedKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failedKeys) {
            if (\is_array($this->failedKeys)) {
                $res['FailedKeys'] = [];
                $n1 = 0;
                foreach ($this->failedKeys as $item1) {
                    $res['FailedKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DeletedKeys'])) {
            if (!empty($map['DeletedKeys'])) {
                $model->deletedKeys = [];
                $n1 = 0;
                foreach ($map['DeletedKeys'] as $item1) {
                    $model->deletedKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FailedKeys'])) {
            if (!empty($map['FailedKeys'])) {
                $model->failedKeys = [];
                $n1 = 0;
                foreach ($map['FailedKeys'] as $item1) {
                    $model->failedKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
