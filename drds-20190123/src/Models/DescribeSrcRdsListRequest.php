<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSrcRdsListRequest\partitionMapping;
use AlibabaCloud\Tea\Model;

class DescribeSrcRdsListRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var partitionMapping[]
     */
    public $partitionMapping;
    protected $_name = [
        'dbName'           => 'DbName',
        'drdsInstanceId'   => 'DrdsInstanceId',
        'partitionMapping' => 'PartitionMapping',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->partitionMapping) {
            $res['PartitionMapping'] = [];
            if (null !== $this->partitionMapping && \is_array($this->partitionMapping)) {
                $n = 0;
                foreach ($this->partitionMapping as $item) {
                    $res['PartitionMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSrcRdsListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['PartitionMapping'])) {
            if (!empty($map['PartitionMapping'])) {
                $model->partitionMapping = [];
                $n                       = 0;
                foreach ($map['PartitionMapping'] as $item) {
                    $model->partitionMapping[$n++] = null !== $item ? partitionMapping::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
