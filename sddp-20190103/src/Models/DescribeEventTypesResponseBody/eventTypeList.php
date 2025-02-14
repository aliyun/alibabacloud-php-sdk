<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody\eventTypeList\subTypeList;

class eventTypeList extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var subTypeList[]
     */
    public $subTypeList;
    protected $_name = [
        'code'        => 'Code',
        'description' => 'Description',
        'id'          => 'Id',
        'name'        => 'Name',
        'subTypeList' => 'SubTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->subTypeList)) {
            Model::validateArray($this->subTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->subTypeList) {
            if (\is_array($this->subTypeList)) {
                $res['SubTypeList'] = [];
                $n1                 = 0;
                foreach ($this->subTypeList as $item1) {
                    $res['SubTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SubTypeList'])) {
            if (!empty($map['SubTypeList'])) {
                $model->subTypeList = [];
                $n1                 = 0;
                foreach ($map['SubTypeList'] as $item1) {
                    $model->subTypeList[$n1++] = subTypeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
