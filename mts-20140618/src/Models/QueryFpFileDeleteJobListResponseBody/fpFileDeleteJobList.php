<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListResponseBody\fpFileDeleteJobList\fpFileDeleteJob;

class fpFileDeleteJobList extends Model
{
    /**
     * @var fpFileDeleteJob[]
     */
    public $fpFileDeleteJob;
    protected $_name = [
        'fpFileDeleteJob' => 'FpFileDeleteJob',
    ];

    public function validate()
    {
        if (\is_array($this->fpFileDeleteJob)) {
            Model::validateArray($this->fpFileDeleteJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpFileDeleteJob) {
            if (\is_array($this->fpFileDeleteJob)) {
                $res['FpFileDeleteJob'] = [];
                $n1 = 0;
                foreach ($this->fpFileDeleteJob as $item1) {
                    $res['FpFileDeleteJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FpFileDeleteJob'])) {
            if (!empty($map['FpFileDeleteJob'])) {
                $model->fpFileDeleteJob = [];
                $n1 = 0;
                foreach ($map['FpFileDeleteJob'] as $item1) {
                    $model->fpFileDeleteJob[$n1] = fpFileDeleteJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
