<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobElasticSpec extends Model
{
    /**
     * @description aimaster角色使用的资源规格
     *
     * @var string
     */
    public $AIMasterType;

    /**
     * @description 打开弹性训练
     *
     * @var bool
     */
    public $enableElasticTraining;

    /**
     * @description 最大并行度
     *
     * @var int
     */
    public $maxParallelism;

    /**
     * @description 最小并行度
     *
     * @var int
     */
    public $minParallelism;
    protected $_name = [
        'AIMasterType'          => 'AIMasterType',
        'enableElasticTraining' => 'EnableElasticTraining',
        'maxParallelism'        => 'MaxParallelism',
        'minParallelism'        => 'MinParallelism',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIMasterType) {
            $res['AIMasterType'] = $this->AIMasterType;
        }
        if (null !== $this->enableElasticTraining) {
            $res['EnableElasticTraining'] = $this->enableElasticTraining;
        }
        if (null !== $this->maxParallelism) {
            $res['MaxParallelism'] = $this->maxParallelism;
        }
        if (null !== $this->minParallelism) {
            $res['MinParallelism'] = $this->minParallelism;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobElasticSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIMasterType'])) {
            $model->AIMasterType = $map['AIMasterType'];
        }
        if (isset($map['EnableElasticTraining'])) {
            $model->enableElasticTraining = $map['EnableElasticTraining'];
        }
        if (isset($map['MaxParallelism'])) {
            $model->maxParallelism = $map['MaxParallelism'];
        }
        if (isset($map['MinParallelism'])) {
            $model->minParallelism = $map['MinParallelism'];
        }

        return $model;
    }
}
