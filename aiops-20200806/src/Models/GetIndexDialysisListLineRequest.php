<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetIndexDialysisListLineRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $cloudResourceId;

    /**
     * @var string
     */
    public $cloudTypeName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $indexCode;

    /**
     * @var string
     */
    public $metricExtend;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'beginTime'       => 'BeginTime',
        'cloudResourceId' => 'CloudResourceId',
        'cloudTypeName'   => 'CloudTypeName',
        'endTime'         => 'EndTime',
        'indexCode'       => 'IndexCode',
        'metricExtend'    => 'MetricExtend',
        'operaUid'        => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->cloudResourceId) {
            $res['CloudResourceId'] = $this->cloudResourceId;
        }
        if (null !== $this->cloudTypeName) {
            $res['CloudTypeName'] = $this->cloudTypeName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->indexCode) {
            $res['IndexCode'] = $this->indexCode;
        }
        if (null !== $this->metricExtend) {
            $res['MetricExtend'] = $this->metricExtend;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIndexDialysisListLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CloudResourceId'])) {
            $model->cloudResourceId = $map['CloudResourceId'];
        }
        if (isset($map['CloudTypeName'])) {
            $model->cloudTypeName = $map['CloudTypeName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IndexCode'])) {
            $model->indexCode = $map['IndexCode'];
        }
        if (isset($map['MetricExtend'])) {
            $model->metricExtend = $map['MetricExtend'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
