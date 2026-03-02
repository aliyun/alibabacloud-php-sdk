<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryMemoryListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryMemoryListResponseBody\data\memoryNodes;

class data extends Model
{
    /**
     * @var memoryNodes[]
     */
    public $memoryNodes;

    /**
     * @var string
     */
    public $pageNum;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'memoryNodes' => 'MemoryNodes',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->memoryNodes)) {
            Model::validateArray($this->memoryNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memoryNodes) {
            if (\is_array($this->memoryNodes)) {
                $res['MemoryNodes'] = [];
                $n1 = 0;
                foreach ($this->memoryNodes as $item1) {
                    $res['MemoryNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['MemoryNodes'])) {
            if (!empty($map['MemoryNodes'])) {
                $model->memoryNodes = [];
                $n1 = 0;
                foreach ($map['MemoryNodes'] as $item1) {
                    $model->memoryNodes[$n1] = memoryNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
