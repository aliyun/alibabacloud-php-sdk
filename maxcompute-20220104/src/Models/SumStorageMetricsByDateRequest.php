<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class SumStorageMetricsByDateRequest extends Model
{
    /**
     * @example 1718590596556
     *
     * @var int
     */
    public $endDate;

    /**
     * @var string[]
     */
    public $projectNames;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example 1715393576201
     *
     * @var int
     */
    public $startDate;

    /**
     * @example PROJECT
     *
     * @var string
     */
    public $statsType;

    /**
     * @example 12345
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'endDate' => 'endDate',
        'projectNames' => 'projectNames',
        'region' => 'region',
        'startDate' => 'startDate',
        'statsType' => 'statsType',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->projectNames) {
            $res['projectNames'] = $this->projectNames;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->statsType) {
            $res['statsType'] = $this->statsType;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SumStorageMetricsByDateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['projectNames'])) {
            if (!empty($map['projectNames'])) {
                $model->projectNames = $map['projectNames'];
            }
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['statsType'])) {
            $model->statsType = $map['statsType'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
