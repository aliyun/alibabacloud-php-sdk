<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelGroupDTO extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $modelCount;

    /**
     * @var int[]
     */
    public $modelList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'groupId' => 'groupId',
        'modelCount' => 'modelCount',
        'modelList' => 'modelList',
        'name' => 'name',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->modelList)) {
            Model::validateArray($this->modelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->modelCount) {
            $res['modelCount'] = $this->modelCount;
        }

        if (null !== $this->modelList) {
            if (\is_array($this->modelList)) {
                $res['modelList'] = [];
                $n1 = 0;
                foreach ($this->modelList as $item1) {
                    $res['modelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['modelCount'])) {
            $model->modelCount = $map['modelCount'];
        }

        if (isset($map['modelList'])) {
            if (!empty($map['modelList'])) {
                $model->modelList = [];
                $n1 = 0;
                foreach ($map['modelList'] as $item1) {
                    $model->modelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
