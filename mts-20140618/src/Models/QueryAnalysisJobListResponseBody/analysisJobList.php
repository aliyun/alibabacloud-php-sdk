<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob;

class analysisJobList extends Model
{
    /**
     * @var analysisJob[]
     */
    public $analysisJob;
    protected $_name = [
        'analysisJob' => 'AnalysisJob',
    ];

    public function validate()
    {
        if (\is_array($this->analysisJob)) {
            Model::validateArray($this->analysisJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisJob) {
            if (\is_array($this->analysisJob)) {
                $res['AnalysisJob'] = [];
                $n1 = 0;
                foreach ($this->analysisJob as $item1) {
                    $res['AnalysisJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AnalysisJob'])) {
            if (!empty($map['AnalysisJob'])) {
                $model->analysisJob = [];
                $n1 = 0;
                foreach ($map['AnalysisJob'] as $item1) {
                    $model->analysisJob[$n1++] = analysisJob::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
