<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateSecurityClassifyCatalogRequest;

use AlibabaCloud\Dara\Model;

class updateCommand extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $ownerList;

    /**
     * @var string
     */
    public $parentPath;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $visibleType;
    protected $_name = [
        'name' => 'Name',
        'ownerList' => 'OwnerList',
        'parentPath' => 'ParentPath',
        'path' => 'Path',
        'visibleType' => 'VisibleType',
    ];

    public function validate()
    {
        if (\is_array($this->ownerList)) {
            Model::validateArray($this->ownerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerList) {
            if (\is_array($this->ownerList)) {
                $res['OwnerList'] = [];
                $n1 = 0;
                foreach ($this->ownerList as $item1) {
                    $res['OwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parentPath) {
            $res['ParentPath'] = $this->parentPath;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->visibleType) {
            $res['VisibleType'] = $this->visibleType;
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

        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n1 = 0;
                foreach ($map['OwnerList'] as $item1) {
                    $model->ownerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ParentPath'])) {
            $model->parentPath = $map['ParentPath'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['VisibleType'])) {
            $model->visibleType = $map['VisibleType'];
        }

        return $model;
    }
}
