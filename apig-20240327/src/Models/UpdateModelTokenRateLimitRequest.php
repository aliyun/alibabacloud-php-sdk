<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateModelTokenRateLimitRequest\consumers;

class UpdateModelTokenRateLimitRequest extends Model
{
    /**
     * @var consumers[]
     */
    public $consumers;

    /**
     * @var int
     */
    public $expectedRevision;

    /**
     * @var int
     */
    public $globalTpm;
    protected $_name = [
        'consumers' => 'consumers',
        'expectedRevision' => 'expectedRevision',
        'globalTpm' => 'globalTpm',
    ];

    public function validate()
    {
        if (\is_array($this->consumers)) {
            Model::validateArray($this->consumers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumers) {
            if (\is_array($this->consumers)) {
                $res['consumers'] = [];
                $n1 = 0;
                foreach ($this->consumers as $item1) {
                    $res['consumers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expectedRevision) {
            $res['expectedRevision'] = $this->expectedRevision;
        }

        if (null !== $this->globalTpm) {
            $res['globalTpm'] = $this->globalTpm;
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
        if (isset($map['consumers'])) {
            if (!empty($map['consumers'])) {
                $model->consumers = [];
                $n1 = 0;
                foreach ($map['consumers'] as $item1) {
                    $model->consumers[$n1] = consumers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['expectedRevision'])) {
            $model->expectedRevision = $map['expectedRevision'];
        }

        if (isset($map['globalTpm'])) {
            $model->globalTpm = $map['globalTpm'];
        }

        return $model;
    }
}
