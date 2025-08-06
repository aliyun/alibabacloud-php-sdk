<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIASRJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIASRJobResponseBody\AIASRJobList\AIASRJob;

class AIASRJobList extends Model
{
    /**
     * @var AIASRJob[]
     */
    public $AIASRJob;
    protected $_name = [
        'AIASRJob' => 'AIASRJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIASRJob)) {
            Model::validateArray($this->AIASRJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIASRJob) {
            if (\is_array($this->AIASRJob)) {
                $res['AIASRJob'] = [];
                $n1 = 0;
                foreach ($this->AIASRJob as $item1) {
                    $res['AIASRJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIASRJob'])) {
            if (!empty($map['AIASRJob'])) {
                $model->AIASRJob = [];
                $n1 = 0;
                foreach ($map['AIASRJob'] as $item1) {
                    $model->AIASRJob[$n1] = AIASRJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
