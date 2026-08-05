<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteResponseBody;

use AlibabaCloud\Dara\Model;

class trace extends Model
{
    /**
     * @var bool
     */
    public $matched;

    /**
     * @var string
     */
    public $stepModuleName;

    /**
     * @var trace\trace[]
     */
    public $trace;
    protected $_name = [
        'matched' => 'Matched',
        'stepModuleName' => 'StepModuleName',
        'trace' => 'Trace',
    ];

    public function validate()
    {
        if (\is_array($this->trace)) {
            Model::validateArray($this->trace);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matched) {
            $res['Matched'] = $this->matched;
        }

        if (null !== $this->stepModuleName) {
            $res['StepModuleName'] = $this->stepModuleName;
        }

        if (null !== $this->trace) {
            if (\is_array($this->trace)) {
                $res['Trace'] = [];
                $n1 = 0;
                foreach ($this->trace as $item1) {
                    $res['Trace'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Matched'])) {
            $model->matched = $map['Matched'];
        }

        if (isset($map['StepModuleName'])) {
            $model->stepModuleName = $map['StepModuleName'];
        }

        if (isset($map['Trace'])) {
            if (!empty($map['Trace'])) {
                $model->trace = [];
                $n1 = 0;
                foreach ($map['Trace'] as $item1) {
                    $model->trace[$n1] = trace\trace::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
