<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCanExpandInstanceDetailListResponseBody\data;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCanExpandInstanceDetailListResponseBody\data\itemData\dbList;
use AlibabaCloud\Tea\Model;

class itemData extends Model
{
    /**
     * @var dbList
     */
    public $dbList;

    /**
     * @var string
     */
    public $srcInstance;
    protected $_name = [
        'dbList'      => 'DbList',
        'srcInstance' => 'SrcInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbList) {
            $res['DbList'] = null !== $this->dbList ? $this->dbList->toMap() : null;
        }
        if (null !== $this->srcInstance) {
            $res['SrcInstance'] = $this->srcInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbList'])) {
            $model->dbList = dbList::fromMap($map['DbList']);
        }
        if (isset($map['SrcInstance'])) {
            $model->srcInstance = $map['SrcInstance'];
        }

        return $model;
    }
}
