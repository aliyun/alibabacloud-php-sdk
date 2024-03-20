<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexPartitionRequest;

use AlibabaCloud\Tea\Model;

class indexInfos extends Model
{
    /**
     * @description The name of the index.
     *
     * @example atest2
     *
     * @var string
     */
    public $indexName;

    /**
     * @description The number of concurrency. The default value is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $parallelNum;

    /**
     * @description The number of shards of the index.
     *
     * @example 3
     *
     * @var int
     */
    public $partitionCount;
    protected $_name = [
        'indexName'      => 'indexName',
        'parallelNum'    => 'parallelNum',
        'partitionCount' => 'partitionCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }
        if (null !== $this->parallelNum) {
            $res['parallelNum'] = $this->parallelNum;
        }
        if (null !== $this->partitionCount) {
            $res['partitionCount'] = $this->partitionCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }
        if (isset($map['parallelNum'])) {
            $model->parallelNum = $map['parallelNum'];
        }
        if (isset($map['partitionCount'])) {
            $model->partitionCount = $map['partitionCount'];
        }

        return $model;
    }
}
