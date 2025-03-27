<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class IllustrationTask extends Model
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
     * @var int[]
     */
    public $illustrationIds;

    /**
     * @var int
     */
    public $illustrationTaskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $textId;
    protected $_name = [
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'illustrationIds' => 'illustrationIds',
        'illustrationTaskId' => 'illustrationTaskId',
        'taskStatus' => 'taskStatus',
        'textId' => 'textId',
    ];

    public function validate()
    {
        if (\is_array($this->illustrationIds)) {
            Model::validateArray($this->illustrationIds);
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

        if (null !== $this->illustrationIds) {
            if (\is_array($this->illustrationIds)) {
                $res['illustrationIds'] = [];
                $n1 = 0;
                foreach ($this->illustrationIds as $item1) {
                    $res['illustrationIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->illustrationTaskId) {
            $res['illustrationTaskId'] = $this->illustrationTaskId;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }

        if (null !== $this->textId) {
            $res['textId'] = $this->textId;
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

        if (isset($map['illustrationIds'])) {
            if (!empty($map['illustrationIds'])) {
                $model->illustrationIds = [];
                $n1 = 0;
                foreach ($map['illustrationIds'] as $item1) {
                    $model->illustrationIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['illustrationTaskId'])) {
            $model->illustrationTaskId = $map['illustrationTaskId'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        if (isset($map['textId'])) {
            $model->textId = $map['textId'];
        }

        return $model;
    }
}
