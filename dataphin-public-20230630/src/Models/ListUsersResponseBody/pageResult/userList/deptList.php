<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUsersResponseBody\pageResult\userList;

use AlibabaCloud\Dara\Model;

class deptList extends Model
{
    /**
     * @var mixed[][]
     */
    public $children;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var mixed[][]
     */
    public $parents;
    protected $_name = [
        'children' => 'Children',
        'fullName' => 'FullName',
        'id' => 'Id',
        'name' => 'Name',
        'parentId' => 'ParentId',
        'parents' => 'Parents',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->parents)) {
            Model::validateArray($this->parents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    if (\is_array($item1)) {
                        $res['Children'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Children'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->parents) {
            if (\is_array($this->parents)) {
                $res['Parents'] = [];
                $n1 = 0;
                foreach ($this->parents as $item1) {
                    if (\is_array($item1)) {
                        $res['Parents'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Parents'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    if (!empty($item1)) {
                        $model->children[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->children[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['Parents'])) {
            if (!empty($map['Parents'])) {
                $model->parents = [];
                $n1 = 0;
                foreach ($map['Parents'] as $item1) {
                    if (!empty($item1)) {
                        $model->parents[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->parents[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
