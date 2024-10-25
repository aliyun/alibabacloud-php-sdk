<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorReportComponentSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Score.
     *
     * @example 88
     *
     * @var int
     */
    public $score;

    /**
     * @description Optimization suggestions.
     *
     * @example 计算健康度分数为 88 ，集群处于健康状态，继续保持
     * Tez 任务 1518 个，加权平均分为 88 ，内存使用量占整体集群的 100.0% ，CPU 使用量占整体集群的 100.0% ，其中 209 个任务处于不健康状态，596 个任务处于亚健康状态；
     * 可在下面的任务明细列表中点击\\"\\"查看详情\\"\\"，查看存在的具体问题及解决方案。其中\\"\\"低分任务算力内存时 (GB*Sec)Top20 \\"\\"表根据内存时使用量进行排序，由于大任务对集群整体影响可能更大，建议优先关注。
     * 其中，Tez作业平均内存利用率为 47.8%
     * @var string
     */
    public $suggestion;

    /**
     * @description Report summary.
     *
     * @example <h4> [计算检测]  计算健康度分数为 88 ，健康度良好，继续加油 </h4><p style=\\"\\"text-indent：2em\\"\\">集群中大部分任务保持健康状态 </p><p style=\\"\\"text-indent：2em\\"\\">集群内存利用率为： 47.8% 偏低 </p>
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'score'      => 'Score',
        'suggestion' => 'Suggestion',
        'summary'    => 'Summary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
