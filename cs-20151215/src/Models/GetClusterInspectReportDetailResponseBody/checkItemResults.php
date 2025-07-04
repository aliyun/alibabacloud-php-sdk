<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectReportDetailResponseBody;

use AlibabaCloud\Dara\Model;

class checkItemResults extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $checkItemUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fix;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string[]
     */
    public $targets;
    protected $_name = [
        'category' => 'category',
        'checkItemUid' => 'checkItemUid',
        'description' => 'description',
        'fix' => 'fix',
        'level' => 'level',
        'name' => 'name',
        'result' => 'result',
        'targetType' => 'targetType',
        'targets' => 'targets',
    ];

    public function validate()
    {
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->checkItemUid) {
            $res['checkItemUid'] = $this->checkItemUid;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->fix) {
            $res['fix'] = $this->fix;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['targets'][$n1] = $item1;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['checkItemUid'])) {
            $model->checkItemUid = $map['checkItemUid'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['fix'])) {
            $model->fix = $map['fix'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        if (isset($map['targets'])) {
            if (!empty($map['targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['targets'] as $item1) {
                    $model->targets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
