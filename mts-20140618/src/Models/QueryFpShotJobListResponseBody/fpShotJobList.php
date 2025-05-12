<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob;

class fpShotJobList extends Model
{
    /**
     * @var fpShotJob[]
     */
    public $fpShotJob;
    protected $_name = [
        'fpShotJob' => 'FpShotJob',
    ];

    public function validate()
    {
        if (\is_array($this->fpShotJob)) {
            Model::validateArray($this->fpShotJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotJob) {
            if (\is_array($this->fpShotJob)) {
                $res['FpShotJob'] = [];
                $n1 = 0;
                foreach ($this->fpShotJob as $item1) {
                    $res['FpShotJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FpShotJob'])) {
            if (!empty($map['FpShotJob'])) {
                $model->fpShotJob = [];
                $n1 = 0;
                foreach ($map['FpShotJob'] as $item1) {
                    $model->fpShotJob[$n1++] = fpShotJob::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
