<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoPornRecogJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoPornRecogJobResponseBody\AIVideoPornRecogJobList\AIVideoPornRecogJob;

class AIVideoPornRecogJobList extends Model
{
    /**
     * @var AIVideoPornRecogJob[]
     */
    public $AIVideoPornRecogJob;
    protected $_name = [
        'AIVideoPornRecogJob' => 'AIVideoPornRecogJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIVideoPornRecogJob)) {
            Model::validateArray($this->AIVideoPornRecogJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoPornRecogJob) {
            if (\is_array($this->AIVideoPornRecogJob)) {
                $res['AIVideoPornRecogJob'] = [];
                $n1 = 0;
                foreach ($this->AIVideoPornRecogJob as $item1) {
                    $res['AIVideoPornRecogJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIVideoPornRecogJob'])) {
            if (!empty($map['AIVideoPornRecogJob'])) {
                $model->AIVideoPornRecogJob = [];
                $n1 = 0;
                foreach ($map['AIVideoPornRecogJob'] as $item1) {
                    $model->AIVideoPornRecogJob[$n1] = AIVideoPornRecogJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
