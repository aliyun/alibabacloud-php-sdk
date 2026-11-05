<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBudgetUsageResponseBody\policies;

class DescribeBudgetUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $alertTriggered;

    /**
     * @var string
     */
    public $dimensionRefId;

    /**
     * @var string
     */
    public $dimensionType;

    /**
     * @var string
     */
    public $exceeded;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var policies[]
     */
    public $policies;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $usedPoints;

    /**
     * @var string
     */
    public $windowEndTime;

    /**
     * @var string
     */
    public $windowStartTime;
    protected $_name = [
        'alertTriggered' => 'AlertTriggered',
        'dimensionRefId' => 'DimensionRefId',
        'dimensionType' => 'DimensionType',
        'exceeded' => 'Exceeded',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'gwClusterId' => 'GwClusterId',
        'policies' => 'Policies',
        'requestId' => 'RequestId',
        'usedPoints' => 'UsedPoints',
        'windowEndTime' => 'WindowEndTime',
        'windowStartTime' => 'WindowStartTime',
    ];

    public function validate()
    {
        if (\is_array($this->policies)) {
            Model::validateArray($this->policies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertTriggered) {
            $res['AlertTriggered'] = $this->alertTriggered;
        }

        if (null !== $this->dimensionRefId) {
            $res['DimensionRefId'] = $this->dimensionRefId;
        }

        if (null !== $this->dimensionType) {
            $res['DimensionType'] = $this->dimensionType;
        }

        if (null !== $this->exceeded) {
            $res['Exceeded'] = $this->exceeded;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->policies) {
            if (\is_array($this->policies)) {
                $res['Policies'] = [];
                $n1 = 0;
                foreach ($this->policies as $item1) {
                    $res['Policies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usedPoints) {
            $res['UsedPoints'] = $this->usedPoints;
        }

        if (null !== $this->windowEndTime) {
            $res['WindowEndTime'] = $this->windowEndTime;
        }

        if (null !== $this->windowStartTime) {
            $res['WindowStartTime'] = $this->windowStartTime;
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
        if (isset($map['AlertTriggered'])) {
            $model->alertTriggered = $map['AlertTriggered'];
        }

        if (isset($map['DimensionRefId'])) {
            $model->dimensionRefId = $map['DimensionRefId'];
        }

        if (isset($map['DimensionType'])) {
            $model->dimensionType = $map['DimensionType'];
        }

        if (isset($map['Exceeded'])) {
            $model->exceeded = $map['Exceeded'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n1 = 0;
                foreach ($map['Policies'] as $item1) {
                    $model->policies[$n1] = policies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UsedPoints'])) {
            $model->usedPoints = $map['UsedPoints'];
        }

        if (isset($map['WindowEndTime'])) {
            $model->windowEndTime = $map['WindowEndTime'];
        }

        if (isset($map['WindowStartTime'])) {
            $model->windowStartTime = $map['WindowStartTime'];
        }

        return $model;
    }
}
