<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class FigureClusterConfig extends Model
{
    /**
     * @var bool
     */
    public $autoClustering;

    /**
     * @var bool
     */
    public $autoGenerate;

    /**
     * @var string[]
     */
    public $enabledFeatures;

    /**
     * @var int
     */
    public $minEntityCount;
    protected $_name = [
        'autoClustering' => 'AutoClustering',
        'autoGenerate' => 'AutoGenerate',
        'enabledFeatures' => 'EnabledFeatures',
        'minEntityCount' => 'MinEntityCount',
    ];

    public function validate()
    {
        if (\is_array($this->enabledFeatures)) {
            Model::validateArray($this->enabledFeatures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoClustering) {
            $res['AutoClustering'] = $this->autoClustering;
        }

        if (null !== $this->autoGenerate) {
            $res['AutoGenerate'] = $this->autoGenerate;
        }

        if (null !== $this->enabledFeatures) {
            if (\is_array($this->enabledFeatures)) {
                $res['EnabledFeatures'] = [];
                $n1 = 0;
                foreach ($this->enabledFeatures as $item1) {
                    $res['EnabledFeatures'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->minEntityCount) {
            $res['MinEntityCount'] = $this->minEntityCount;
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
        if (isset($map['AutoClustering'])) {
            $model->autoClustering = $map['AutoClustering'];
        }

        if (isset($map['AutoGenerate'])) {
            $model->autoGenerate = $map['AutoGenerate'];
        }

        if (isset($map['EnabledFeatures'])) {
            if (!empty($map['EnabledFeatures'])) {
                $model->enabledFeatures = [];
                $n1 = 0;
                foreach ($map['EnabledFeatures'] as $item1) {
                    $model->enabledFeatures[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MinEntityCount'])) {
            $model->minEntityCount = $map['MinEntityCount'];
        }

        return $model;
    }
}
