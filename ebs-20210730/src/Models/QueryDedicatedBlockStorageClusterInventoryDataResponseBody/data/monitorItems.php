<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterInventoryDataResponseBody\data;

use AlibabaCloud\Dara\Model;

class monitorItems extends Model
{
    /**
     * @var int
     */
    public $availableSize;
    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'availableSize' => 'AvailableSize',
        'totalSize'     => 'TotalSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableSize) {
            $res['AvailableSize'] = $this->availableSize;
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['AvailableSize'])) {
            $model->availableSize = $map['AvailableSize'];
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
