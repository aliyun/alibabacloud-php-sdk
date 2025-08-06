<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponseBody\AIJobList\AIJob;

class AIJobList extends Model
{
    /**
     * @var AIJob[]
     */
    public $AIJob;
    protected $_name = [
        'AIJob' => 'AIJob',
    ];

    public function validate()
    {
        if (\is_array($this->AIJob)) {
            Model::validateArray($this->AIJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIJob) {
            if (\is_array($this->AIJob)) {
                $res['AIJob'] = [];
                $n1 = 0;
                foreach ($this->AIJob as $item1) {
                    $res['AIJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIJob'])) {
            if (!empty($map['AIJob'])) {
                $model->AIJob = [];
                $n1 = 0;
                foreach ($map['AIJob'] as $item1) {
                    $model->AIJob[$n1] = AIJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
