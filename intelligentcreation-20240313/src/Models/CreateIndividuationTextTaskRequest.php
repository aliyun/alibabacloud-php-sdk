<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateIndividuationTextTaskRequest extends Model
{
    /**
     * @var string[][]
     */
    public $crowdPack;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'crowdPack' => 'crowdPack',
        'projectId' => 'projectId',
        'taskName'  => 'taskName',
    ];

    public function validate()
    {
        if (\is_array($this->crowdPack)) {
            Model::validateArray($this->crowdPack);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crowdPack) {
            if (\is_array($this->crowdPack)) {
                $res['crowdPack'] = [];
                $n1               = 0;
                foreach ($this->crowdPack as $item1) {
                    if (\is_array($item1)) {
                        $res['crowdPack'][$n1++] = [];
                        $n2                      = 0;
                        foreach ($item1 as $item2) {
                            $res['crowdPack'][$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
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
        if (isset($map['crowdPack'])) {
            if (!empty($map['crowdPack'])) {
                $model->crowdPack = [];
                $n1               = 0;
                foreach ($map['crowdPack'] as $item1) {
                    if (!empty($item1)) {
                        $model->crowdPack[$n1++] = [];
                        $n2                      = 0;
                        foreach ($item1 as $item2) {
                            $model->crowdPack[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
