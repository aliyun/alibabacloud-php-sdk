<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesResponse\slsConfigStatus;
use AlibabaCloud\Tea\Model;

class ListOpenedAccessLogInstancesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var slsConfigStatus[]
     */
    public $slsConfigStatus;
    protected $_name = [
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'slsConfigStatus' => 'SlsConfigStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('slsConfigStatus', $this->slsConfigStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOpenedAccessLogInstancesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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

        return $model;
    }
}
