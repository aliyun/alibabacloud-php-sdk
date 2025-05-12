<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpDBDeleteJobListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpDBDeleteJobListResponseBody\fpDBDeleteJobList\fpDBDeleteJob;

class fpDBDeleteJobList extends Model
{
    /**
     * @var fpDBDeleteJob[]
     */
    public $fpDBDeleteJob;
    protected $_name = [
        'fpDBDeleteJob' => 'FpDBDeleteJob',
    ];

    public function validate()
    {
        if (\is_array($this->fpDBDeleteJob)) {
            Model::validateArray($this->fpDBDeleteJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpDBDeleteJob) {
            if (\is_array($this->fpDBDeleteJob)) {
                $res['FpDBDeleteJob'] = [];
                $n1 = 0;
                foreach ($this->fpDBDeleteJob as $item1) {
                    $res['FpDBDeleteJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FpDBDeleteJob'])) {
            if (!empty($map['FpDBDeleteJob'])) {
                $model->fpDBDeleteJob = [];
                $n1 = 0;
                foreach ($map['FpDBDeleteJob'] as $item1) {
                    $model->fpDBDeleteJob[$n1++] = fpDBDeleteJob::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
