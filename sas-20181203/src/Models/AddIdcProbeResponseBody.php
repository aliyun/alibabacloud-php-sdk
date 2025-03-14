<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\AddIdcProbeResponseBody\addIdcProbeFailedList;
use AlibabaCloud\Tea\Model;

class AddIdcProbeResponseBody extends Model
{
    /**
     * @description The records of failure.
     *
     * @var addIdcProbeFailedList[]
     */
    public $addIdcProbeFailedList;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var string
     */
    public $count;

    /**
     * @description The request ID.
     *
     * @example D706F2DD-FF07-576B-9DD1-0B484A9B3065
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addIdcProbeFailedList' => 'AddIdcProbeFailedList',
        'count' => 'Count',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addIdcProbeFailedList) {
            $res['AddIdcProbeFailedList'] = [];
            if (null !== $this->addIdcProbeFailedList && \is_array($this->addIdcProbeFailedList)) {
                $n = 0;
                foreach ($this->addIdcProbeFailedList as $item) {
                    $res['AddIdcProbeFailedList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIdcProbeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddIdcProbeFailedList'])) {
            if (!empty($map['AddIdcProbeFailedList'])) {
                $model->addIdcProbeFailedList = [];
                $n = 0;
                foreach ($map['AddIdcProbeFailedList'] as $item) {
                    $model->addIdcProbeFailedList[$n++] = null !== $item ? addIdcProbeFailedList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
