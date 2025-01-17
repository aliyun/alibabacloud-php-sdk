<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoNodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoNodeResponseBody\node\propertyList;

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
        if (\is_array($this->propertyList)) {
            Model::validateArray($this->propertyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->propertyList) {
            if (\is_array($this->propertyList)) {
                $res['PropertyList'] = [];
                $n1                  = 0;
                foreach ($this->propertyList as $item1) {
                    $res['PropertyList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PropertyList'])) {
            if (!empty($map['PropertyList'])) {
                $model->propertyList = [];
                $n1                  = 0;
                foreach ($map['PropertyList'] as $item1) {
                    $model->propertyList[$n1++] = propertyList::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
