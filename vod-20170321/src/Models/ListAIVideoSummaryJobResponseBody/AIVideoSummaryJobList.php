<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoSummaryJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoSummaryJobResponseBody\AIVideoSummaryJobList\AIVideoSummaryJob;

class AIVideoSummaryJobList extends Model
{
    /**
     * @var AIVideoSummaryJob[]
     */
    public $AIVideoSummaryJob;
    protected $_name = [
        'AIVideoSummaryJob' => 'AIVideoSummaryJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIVideoSummaryJob)) {
            Model::validateArray($this->AIVideoSummaryJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoSummaryJob) {
            if (\is_array($this->AIVideoSummaryJob)) {
                $res['AIVideoSummaryJob'] = [];
                $n1 = 0;
                foreach ($this->AIVideoSummaryJob as $item1) {
                    $res['AIVideoSummaryJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIVideoSummaryJob'])) {
            if (!empty($map['AIVideoSummaryJob'])) {
                $model->AIVideoSummaryJob = [];
                $n1 = 0;
                foreach ($map['AIVideoSummaryJob'] as $item1) {
                    $model->AIVideoSummaryJob[$n1] = AIVideoSummaryJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
