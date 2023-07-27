<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsByTagNameAndBatchIDResponseBody\data;

use AlibabaCloud\Tea\Model;

class stat extends Model
{
    /**
     * @example 2021-07-02
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $faildCount;

    /**
     * @example 4
     *
     * @var string
     */
    public $requestCount;

    /**
     * @example 100.00%
     *
     * @var string
     */
    public $succeededPercent;

    /**
     * @example 4
     *
     * @var string
     */
    public $successCount;

    /**
     * @example 0
     *
     * @var string
     */
    public $unavailableCount;

    /**
     * @example 0%
     *
     * @var string
     */
    public $unavailablePercent;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'faildCount'         => 'faildCount',
        'requestCount'       => 'requestCount',
        'succeededPercent'   => 'succeededPercent',
        'successCount'       => 'successCount',
        'unavailableCount'   => 'unavailableCount',
        'unavailablePercent' => 'unavailablePercent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->faildCount) {
            $res['faildCount'] = $this->faildCount;
        }
        if (null !== $this->requestCount) {
            $res['requestCount'] = $this->requestCount;
        }
        if (null !== $this->succeededPercent) {
            $res['succeededPercent'] = $this->succeededPercent;
        }
        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
        }
        if (null !== $this->unavailableCount) {
            $res['unavailableCount'] = $this->unavailableCount;
        }
        if (null !== $this->unavailablePercent) {
            $res['unavailablePercent'] = $this->unavailablePercent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['faildCount'])) {
            $model->faildCount = $map['faildCount'];
        }
        if (isset($map['requestCount'])) {
            $model->requestCount = $map['requestCount'];
        }
        if (isset($map['succeededPercent'])) {
            $model->succeededPercent = $map['succeededPercent'];
        }
        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }
        if (isset($map['unavailableCount'])) {
            $model->unavailableCount = $map['unavailableCount'];
        }
        if (isset($map['unavailablePercent'])) {
            $model->unavailablePercent = $map['unavailablePercent'];
        }

        return $model;
    }
}
