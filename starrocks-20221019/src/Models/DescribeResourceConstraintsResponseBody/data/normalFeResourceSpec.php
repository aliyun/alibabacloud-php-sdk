<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data;

use AlibabaCloud\Dara\Model;

class normalFeResourceSpec extends Model
{
    /**
     * @var int
     */
    public $cu;

    /**
     * @var int
     */
    public $nodeNumber;

    /**
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'cu' => 'Cu',
        'nodeNumber' => 'NodeNumber',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->nodeNumber) {
            $res['NodeNumber'] = $this->nodeNumber;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
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
        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['NodeNumber'])) {
            $model->nodeNumber = $map['NodeNumber'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
