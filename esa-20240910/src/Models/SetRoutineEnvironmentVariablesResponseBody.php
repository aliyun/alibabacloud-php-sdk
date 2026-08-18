<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetRoutineEnvironmentVariablesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $setKeys;
    protected $_name = [
        'requestId' => 'RequestId',
        'setKeys' => 'SetKeys',
    ];

    public function validate()
    {
        if (\is_array($this->setKeys)) {
            Model::validateArray($this->setKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->setKeys) {
            if (\is_array($this->setKeys)) {
                $res['SetKeys'] = [];
                $n1 = 0;
                foreach ($this->setKeys as $item1) {
                    $res['SetKeys'][$n1] = $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SetKeys'])) {
            if (!empty($map['SetKeys'])) {
                $model->setKeys = [];
                $n1 = 0;
                foreach ($map['SetKeys'] as $item1) {
                    $model->setKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
