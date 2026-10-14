<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class CreateOptimizeRunResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $optimizeRun;

    /**
     * @var string
     */
    public $optimizeRunId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'optimizeRun' => 'optimizeRun',
        'optimizeRunId' => 'optimizeRunId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->optimizeRun)) {
            Model::validateArray($this->optimizeRun);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->optimizeRun) {
            if (\is_array($this->optimizeRun)) {
                $res['optimizeRun'] = [];
                foreach ($this->optimizeRun as $key1 => $value1) {
                    $res['optimizeRun'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->optimizeRunId) {
            $res['optimizeRunId'] = $this->optimizeRunId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['optimizeRun'])) {
            if (!empty($map['optimizeRun'])) {
                $model->optimizeRun = [];
                foreach ($map['optimizeRun'] as $key1 => $value1) {
                    $model->optimizeRun[$key1] = $value1;
                }
            }
        }

        if (isset($map['optimizeRunId'])) {
            $model->optimizeRunId = $map['optimizeRunId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
