<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexPartitionRequest;

use AlibabaCloud\Dara\Model;

class indexInfos extends Model
{
    /**
     * @var string
     */
    public $indexName;

    /**
     * @var int
     */
    public $parallelNum;

    /**
     * @var int
     */
    public $partitionCount;
    protected $_name = [
        'indexName' => 'indexName',
        'parallelNum' => 'parallelNum',
        'partitionCount' => 'partitionCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
