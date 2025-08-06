<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoFaceRecogJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoFaceRecogJobResponseBody\AIVideoFaceRecogJobList\AIVideoFaceRecogJob;

class AIVideoFaceRecogJobList extends Model
{
    /**
     * @var AIVideoFaceRecogJob[]
     */
    public $AIVideoFaceRecogJob;
    protected $_name = [
        'AIVideoFaceRecogJob' => 'AIVideoFaceRecogJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIVideoFaceRecogJob)) {
            Model::validateArray($this->AIVideoFaceRecogJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoFaceRecogJob) {
            if (\is_array($this->AIVideoFaceRecogJob)) {
                $res['AIVideoFaceRecogJob'] = [];
                $n1 = 0;
                foreach ($this->AIVideoFaceRecogJob as $item1) {
                    $res['AIVideoFaceRecogJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIVideoFaceRecogJob'])) {
            if (!empty($map['AIVideoFaceRecogJob'])) {
                $model->AIVideoFaceRecogJob = [];
                $n1 = 0;
                foreach ($map['AIVideoFaceRecogJob'] as $item1) {
                    $model->AIVideoFaceRecogJob[$n1] = AIVideoFaceRecogJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
