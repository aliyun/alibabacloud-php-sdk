<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUdfRequest;

use AlibabaCloud\Dara\Model;

class updateCommand extends Model
{
    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $commandHelp;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int[]
     */
    public $refResourceIdList;
    protected $_name = [
        'category' => 'Category',
        'className' => 'ClassName',
        'commandHelp' => 'CommandHelp',
        'comment' => 'Comment',
        'description' => 'Description',
        'id' => 'Id',
        'projectId' => 'ProjectId',
        'refResourceIdList' => 'RefResourceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->refResourceIdList)) {
            Model::validateArray($this->refResourceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }

        if (null !== $this->commandHelp) {
            $res['CommandHelp'] = $this->commandHelp;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->refResourceIdList) {
            if (\is_array($this->refResourceIdList)) {
                $res['RefResourceIdList'] = [];
                $n1 = 0;
                foreach ($this->refResourceIdList as $item1) {
                    $res['RefResourceIdList'][$n1] = $item1;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }

        if (isset($map['CommandHelp'])) {
            $model->commandHelp = $map['CommandHelp'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RefResourceIdList'])) {
            if (!empty($map['RefResourceIdList'])) {
                $model->refResourceIdList = [];
                $n1 = 0;
                foreach ($map['RefResourceIdList'] as $item1) {
                    $model->refResourceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
