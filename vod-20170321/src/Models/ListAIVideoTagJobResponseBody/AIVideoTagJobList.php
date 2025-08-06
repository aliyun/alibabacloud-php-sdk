<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoTagJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoTagJobResponseBody\AIVideoTagJobList\AIVideoTagJob;

class AIVideoTagJobList extends Model
{
    /**
     * @var AIVideoTagJob[]
     */
    public $AIVideoTagJob;
    protected $_name = [
        'AIVideoTagJob' => 'AIVideoTagJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIVideoTagJob)) {
            Model::validateArray($this->AIVideoTagJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoTagJob) {
            if (\is_array($this->AIVideoTagJob)) {
                $res['AIVideoTagJob'] = [];
                $n1 = 0;
                foreach ($this->AIVideoTagJob as $item1) {
                    $res['AIVideoTagJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIVideoTagJob'])) {
            if (!empty($map['AIVideoTagJob'])) {
                $model->AIVideoTagJob = [];
                $n1 = 0;
                foreach ($map['AIVideoTagJob'] as $item1) {
                    $model->AIVideoTagJob[$n1] = AIVideoTagJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
