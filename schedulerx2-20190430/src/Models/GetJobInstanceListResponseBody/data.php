<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceListResponseBody\data\jobInstanceDetails;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInstanceDetails) {
            $res['JobInstanceDetails'] = [];
            if (null !== $this->jobInstanceDetails && \is_array($this->jobInstanceDetails)) {
                $n = 0;
                foreach ($this->jobInstanceDetails as $item) {
                    $res['JobInstanceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobInstanceDetails'])) {
            if (!empty($map['JobInstanceDetails'])) {
                $model->jobInstanceDetails = [];
                $n                         = 0;
                foreach ($map['JobInstanceDetails'] as $item) {
                    $model->jobInstanceDetails[$n++] = null !== $item ? jobInstanceDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
