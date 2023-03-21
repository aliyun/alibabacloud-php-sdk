<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoNodeResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoNodeResponseBody\node\propertyList;
use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var propertyList[]
     */
    public $propertyList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name'         => 'Name',
        'propertyList' => 'PropertyList',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->propertyList) {
            $res['PropertyList'] = [];
            if (null !== $this->propertyList && \is_array($this->propertyList)) {
                $n = 0;
                foreach ($this->propertyList as $item) {
                    $res['PropertyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PropertyList'])) {
            if (!empty($map['PropertyList'])) {
                $model->propertyList = [];
                $n                   = 0;
                foreach ($map['PropertyList'] as $item) {
                    $model->propertyList[$n++] = null !== $item ? propertyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
