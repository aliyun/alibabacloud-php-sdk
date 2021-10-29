<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeShardDBsResponseBody;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeShardDBsResponseBody\data\dbIntancePair;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dbIntancePair[]
     */
    public $dbIntancePair;
    protected $_name = [
        'dbIntancePair' => 'DbIntancePair',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbIntancePair) {
            $res['DbIntancePair'] = [];
            if (null !== $this->dbIntancePair && \is_array($this->dbIntancePair)) {
                $n = 0;
                foreach ($this->dbIntancePair as $item) {
                    $res['DbIntancePair'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbIntancePair'])) {
            if (!empty($map['DbIntancePair'])) {
                $model->dbIntancePair = [];
                $n                    = 0;
                foreach ($map['DbIntancePair'] as $item) {
                    $model->dbIntancePair[$n++] = null !== $item ? dbIntancePair::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
