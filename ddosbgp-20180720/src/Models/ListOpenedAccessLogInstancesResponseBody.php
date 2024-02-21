<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesResponseBody\slsConfigStatus;
use AlibabaCloud\Tea\Model;

class ListOpenedAccessLogInstancesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 4DB64811-70A1-41C9-A0CE-CD8B260ED551
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The configuration of log analysis for the Anti-DDoS Origin instance.
     *
     * @var slsConfigStatus[]
     */
    public $slsConfigStatus;

    /**
     * @description The number of the Anti-DDoS Origin instances for which log analysis was enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'       => 'RequestId',
        'slsConfigStatus' => 'SlsConfigStatus',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsConfigStatus) {
            $res['SlsConfigStatus'] = [];
            if (null !== $this->slsConfigStatus && \is_array($this->slsConfigStatus)) {
                $n = 0;
                foreach ($this->slsConfigStatus as $item) {
                    $res['SlsConfigStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOpenedAccessLogInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsConfigStatus'])) {
            if (!empty($map['SlsConfigStatus'])) {
                $model->slsConfigStatus = [];
                $n                      = 0;
                foreach ($map['SlsConfigStatus'] as $item) {
                    $model->slsConfigStatus[$n++] = null !== $item ? slsConfigStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
