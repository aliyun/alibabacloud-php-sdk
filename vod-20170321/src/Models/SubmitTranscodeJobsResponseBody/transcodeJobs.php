<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponseBody\transcodeJobs\transcodeJob;

class transcodeJobs extends Model
{
    /**
     * @var transcodeJob[]
     */
    public $transcodeJob;
    protected $_name = [
        'transcodeJob' => 'TranscodeJob',
    ];

    public function validate()
    {
        if (\is_array($this->transcodeJob)) {
            Model::validateArray($this->transcodeJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transcodeJob) {
            if (\is_array($this->transcodeJob)) {
                $res['TranscodeJob'] = [];
                $n1 = 0;
                foreach ($this->transcodeJob as $item1) {
                    $res['TranscodeJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TranscodeJob'])) {
            if (!empty($map['TranscodeJob'])) {
                $model->transcodeJob = [];
                $n1 = 0;
                foreach ($map['TranscodeJob'] as $item1) {
                    $model->transcodeJob[$n1++] = transcodeJob::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
