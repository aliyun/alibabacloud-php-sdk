<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsByTagNameAndBatchIDResponseBody\data;

use AlibabaCloud\Tea\Model;

class stat extends Model
{
    /**
     * @var string
     */
    public $unavailablePercent;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $succeededPercent;

    /**
     * @var string
     */
    public $faildCount;

    /**
     * @var string
     */
    public $unavailableCount;

    /**
     * @var string
     */
    public $successCount;

    /**
     * @var string
     */
    public $requestCount;
    protected $_name = [
        'unavailablePercent' => 'unavailablePercent',
        'createTime'         => 'CreateTime',
        'succeededPercent'   => 'succeededPercent',
        'faildCount'         => 'faildCount',
        'unavailableCount'   => 'unavailableCount',
        'successCount'       => 'successCount',
        'requestCount'       => 'requestCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unavailablePercent) {
            $res['unavailablePercent'] = $this->unavailablePercent;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->succeededPercent) {
            $res['succeededPercent'] = $this->succeededPercent;
        }
        if (null !== $this->faildCount) {
            $res['faildCount'] = $this->faildCount;
        }
        if (null !== $this->unavailableCount) {
            $res['unavailableCount'] = $this->unavailableCount;
        }
        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
        }
        if (null !== $this->requestCount) {
            $res['requestCount'] = $this->requestCount;
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
        if (isset($map['unavailablePercent'])) {
            $model->unavailablePercent = $map['unavailablePercent'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['succeededPercent'])) {
            $model->succeededPercent = $map['succeededPercent'];
        }
        if (isset($map['faildCount'])) {
            $model->faildCount = $map['faildCount'];
        }
        if (isset($map['unavailableCount'])) {
            $model->unavailableCount = $map['unavailableCount'];
        }
        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }
        if (isset($map['requestCount'])) {
            $model->requestCount = $map['requestCount'];
        }

        return $model;
    }
}
