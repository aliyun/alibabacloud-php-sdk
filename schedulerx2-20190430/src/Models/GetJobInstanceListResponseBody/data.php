<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListResponseBody\data\jobInstanceDetails;

class data extends Model
{
    /**
     * @var jobInstanceDetails[]
     */
    public $jobInstanceDetails;
    protected $_name = [
        'jobInstanceDetails' => 'JobInstanceDetails',
    ];

    public function validate()
    {
        if (\is_array($this->jobInstanceDetails)) {
            Model::validateArray($this->jobInstanceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobInstanceDetails) {
            if (\is_array($this->jobInstanceDetails)) {
                $res['JobInstanceDetails'] = [];
                $n1 = 0;
                foreach ($this->jobInstanceDetails as $item1) {
                    $res['JobInstanceDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JobInstanceDetails'])) {
            if (!empty($map['JobInstanceDetails'])) {
                $model->jobInstanceDetails = [];
                $n1 = 0;
                foreach ($map['JobInstanceDetails'] as $item1) {
                    $model->jobInstanceDetails[$n1] = jobInstanceDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
