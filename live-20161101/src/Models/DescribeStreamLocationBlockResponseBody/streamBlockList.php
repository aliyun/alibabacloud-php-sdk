<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStreamLocationBlockResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStreamLocationBlockResponseBody\streamBlockList\streamBlock;
use AlibabaCloud\Tea\Model;

class streamBlockList extends Model
{
    /**
     * @var streamBlock[]
     */
    public $streamBlock;
    protected $_name = [
        'streamBlock' => 'StreamBlock',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamBlock) {
            $res['StreamBlock'] = [];
            if (null !== $this->streamBlock && \is_array($this->streamBlock)) {
                $n = 0;
                foreach ($this->streamBlock as $item) {
                    $res['StreamBlock'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamBlockList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamBlock'])) {
            if (!empty($map['StreamBlock'])) {
                $model->streamBlock = [];
                $n = 0;
                foreach ($map['StreamBlock'] as $item) {
                    $model->streamBlock[$n++] = null !== $item ? streamBlock::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
