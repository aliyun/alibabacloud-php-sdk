<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStreamLocationBlockResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStreamLocationBlockResponseBody\streamBlockList\streamBlock;

class streamBlockList extends Model
{
    /**
     * @var streamBlock[]
     */
    public $streamBlock;
    protected $_name = [
        'streamBlock' => 'StreamBlock',
    ];

    public function validate()
    {
        if (\is_array($this->streamBlock)) {
            Model::validateArray($this->streamBlock);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamBlock) {
            if (\is_array($this->streamBlock)) {
                $res['StreamBlock'] = [];
                $n1 = 0;
                foreach ($this->streamBlock as $item1) {
                    $res['StreamBlock'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StreamBlock'])) {
            if (!empty($map['StreamBlock'])) {
                $model->streamBlock = [];
                $n1 = 0;
                foreach ($map['StreamBlock'] as $item1) {
                    $model->streamBlock[$n1] = streamBlock::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
