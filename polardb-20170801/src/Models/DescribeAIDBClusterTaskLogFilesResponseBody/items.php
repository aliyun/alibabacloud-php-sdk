<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskLogFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskLogFilesResponseBody\items\slsLogItems;

class items extends Model
{
    /**
     * @var slsLogItems[]
     */
    public $slsLogItems;
    protected $_name = [
        'slsLogItems' => 'SlsLogItems',
    ];

    public function validate()
    {
        if (\is_array($this->slsLogItems)) {
            Model::validateArray($this->slsLogItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slsLogItems) {
            if (\is_array($this->slsLogItems)) {
                $res['SlsLogItems'] = [];
                $n1 = 0;
                foreach ($this->slsLogItems as $item1) {
                    $res['SlsLogItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlsLogItems'])) {
            if (!empty($map['SlsLogItems'])) {
                $model->slsLogItems = [];
                $n1 = 0;
                foreach ($map['SlsLogItems'] as $item1) {
                    $model->slsLogItems[$n1] = slsLogItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
