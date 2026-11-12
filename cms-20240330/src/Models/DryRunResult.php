<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DryRunResult extends Model
{
    /**
     * @var int
     */
    public $exitCode;

    /**
     * @var string
     */
    public $result;

    /**
     * @var DryRunViolation[]
     */
    public $violations;
    protected $_name = [
        'exitCode' => 'exitCode',
        'result' => 'result',
        'violations' => 'violations',
    ];

    public function validate()
    {
        if (\is_array($this->violations)) {
            Model::validateArray($this->violations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exitCode) {
            $res['exitCode'] = $this->exitCode;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->violations) {
            if (\is_array($this->violations)) {
                $res['violations'] = [];
                $n1 = 0;
                foreach ($this->violations as $item1) {
                    $res['violations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['exitCode'])) {
            $model->exitCode = $map['exitCode'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['violations'])) {
            if (!empty($map['violations'])) {
                $model->violations = [];
                $n1 = 0;
                foreach ($map['violations'] as $item1) {
                    $model->violations[$n1] = DryRunViolation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
