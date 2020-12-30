<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListCommonGroupResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var string
     */
    public $smartGroupId;

    /**
     * @var int
     */
    public $pos;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var bool
     */
    public $isRoot;

    /**
     * @var string
     */
    public $pinyin;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'resourceCount' => 'ResourceCount',
        'smartGroupId'  => 'SmartGroupId',
        'pos'           => 'Pos',
        'projectId'     => 'ProjectId',
        'isRoot'        => 'IsRoot',
        'pinyin'        => 'Pinyin',
        'creatorId'     => 'CreatorId',
        'name'          => 'Name',
        'id'            => 'id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }
        if (null !== $this->smartGroupId) {
            $res['SmartGroupId'] = $this->smartGroupId;
        }
        if (null !== $this->pos) {
            $res['Pos'] = $this->pos;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->isRoot) {
            $res['IsRoot'] = $this->isRoot;
        }
        if (null !== $this->pinyin) {
            $res['Pinyin'] = $this->pinyin;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }
        if (isset($map['SmartGroupId'])) {
            $model->smartGroupId = $map['SmartGroupId'];
        }
        if (isset($map['Pos'])) {
            $model->pos = $map['Pos'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IsRoot'])) {
            $model->isRoot = $map['IsRoot'];
        }
        if (isset($map['Pinyin'])) {
            $model->pinyin = $map['Pinyin'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
