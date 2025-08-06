<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoTerrorismRecogJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoTerrorismRecogJobResponseBody\AIVideoTerrorismRecogJobList\AIVideoTerrorismRecogJob;

class AIVideoTerrorismRecogJobList extends Model
{
    /**
     * @var AIVideoTerrorismRecogJob[]
     */
    public $AIVideoTerrorismRecogJob;
    protected $_name = [
        'AIVideoTerrorismRecogJob' => 'AIVideoTerrorismRecogJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIVideoTerrorismRecogJob)) {
            Model::validateArray($this->AIVideoTerrorismRecogJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoTerrorismRecogJob) {
            if (\is_array($this->AIVideoTerrorismRecogJob)) {
                $res['AIVideoTerrorismRecogJob'] = [];
                $n1 = 0;
                foreach ($this->AIVideoTerrorismRecogJob as $item1) {
                    $res['AIVideoTerrorismRecogJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIVideoTerrorismRecogJob'])) {
            if (!empty($map['AIVideoTerrorismRecogJob'])) {
                $model->AIVideoTerrorismRecogJob = [];
                $n1 = 0;
                foreach ($map['AIVideoTerrorismRecogJob'] as $item1) {
                    $model->AIVideoTerrorismRecogJob[$n1] = AIVideoTerrorismRecogJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
