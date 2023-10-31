<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordDownloadJobListResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordDownloadJobListResponseBody\data\jobList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var jobList[]
     */
    public $jobList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'jobList' => 'JobList',
        'total'   => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobList) {
            $res['JobList'] = [];
            if (null !== $this->jobList && \is_array($this->jobList)) {
                $n = 0;
                foreach ($this->jobList as $item) {
                    $res['JobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['JobList'])) {
            if (!empty($map['JobList'])) {
                $model->jobList = [];
                $n              = 0;
                foreach ($map['JobList'] as $item) {
                    $model->jobList[$n++] = null !== $item ? jobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
