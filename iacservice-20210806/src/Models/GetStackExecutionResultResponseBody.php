<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackExecutionResultResponseBody\stackResults;

class GetStackExecutionResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stackResults[]
     */
    public $stackResults;

    /**
     * @var string
     */
    public $triggerId;
    protected $_name = [
        'requestId' => 'requestId',
        'stackResults' => 'stackResults',
        'triggerId' => 'triggerId',
    ];

    public function validate()
    {
        if (\is_array($this->stackResults)) {
            Model::validateArray($this->stackResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->stackResults) {
            if (\is_array($this->stackResults)) {
                $res['stackResults'] = [];
                $n1 = 0;
                foreach ($this->stackResults as $item1) {
                    $res['stackResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->triggerId) {
            $res['triggerId'] = $this->triggerId;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['stackResults'])) {
            if (!empty($map['stackResults'])) {
                $model->stackResults = [];
                $n1 = 0;
                foreach ($map['stackResults'] as $item1) {
                    $model->stackResults[$n1] = stackResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['triggerId'])) {
            $model->triggerId = $map['triggerId'];
        }

        return $model;
    }
}
