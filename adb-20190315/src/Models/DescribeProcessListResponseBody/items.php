<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponseBody\items\process;

class items extends Model
{
    /**
     * @var process[]
     */
    public $process;
    protected $_name = [
        'process' => 'Process',
    ];

    public function validate()
    {
        if (\is_array($this->process)) {
            Model::validateArray($this->process);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->process) {
            if (\is_array($this->process)) {
                $res['Process'] = [];
                $n1 = 0;
                foreach ($this->process as $item1) {
                    $res['Process'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Process'])) {
            if (!empty($map['Process'])) {
                $model->process = [];
                $n1 = 0;
                foreach ($map['Process'] as $item1) {
                    $model->process[$n1] = process::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
