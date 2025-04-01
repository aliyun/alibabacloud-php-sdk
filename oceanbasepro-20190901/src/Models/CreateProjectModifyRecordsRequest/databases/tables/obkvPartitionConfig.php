<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\databases\tables;

use AlibabaCloud\Dara\Model;

class obkvPartitionConfig extends Model
{
    /**
     * @var int
     */
    public $partitionSize;

    /**
     * @var string
     */
    public $partitionType;

    /**
     * @var string
     */
    public $virtualColumn;
    protected $_name = [
        'partitionSize' => 'PartitionSize',
        'partitionType' => 'PartitionType',
        'virtualColumn' => 'VirtualColumn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->partitionSize) {
            $res['PartitionSize'] = $this->partitionSize;
        }

        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }

        if (null !== $this->virtualColumn) {
            $res['VirtualColumn'] = $this->virtualColumn;
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
        if (isset($map['PartitionSize'])) {
            $model->partitionSize = $map['PartitionSize'];
        }

        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }

        if (isset($map['VirtualColumn'])) {
            $model->virtualColumn = $map['VirtualColumn'];
        }

        return $model;
    }
}
