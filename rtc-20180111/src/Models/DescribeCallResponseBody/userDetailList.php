<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallResponseBody\userDetailList\durMetricStatData;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallResponseBody\userDetailList\onlinePeriods;

class userDetailList extends Model
{
    /**
     * @var string
     */
    public $callExp;

    /**
     * @var int
     */
    public $createdTs;

    /**
     * @var int
     */
    public $destroyedTs;

    /**
     * @var durMetricStatData
     */
    public $durMetricStatData;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string[]
     */
    public $networkList;

    /**
     * @var int
     */
    public $onlineDuration;

    /**
     * @var onlinePeriods[]
     */
    public $onlinePeriods;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string[]
     */
    public $osList;

    /**
     * @var string[]
     */
    public $roles;

    /**
     * @var string
     */
    public $sdkVersion;

    /**
     * @var string[]
     */
    public $sdkVersionList;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'callExp' => 'CallExp',
        'createdTs' => 'CreatedTs',
        'destroyedTs' => 'DestroyedTs',
        'durMetricStatData' => 'DurMetricStatData',
        'duration' => 'Duration',
        'location' => 'Location',
        'network' => 'Network',
        'networkList' => 'NetworkList',
        'onlineDuration' => 'OnlineDuration',
        'onlinePeriods' => 'OnlinePeriods',
        'os' => 'Os',
        'osList' => 'OsList',
        'roles' => 'Roles',
        'sdkVersion' => 'SdkVersion',
        'sdkVersionList' => 'SdkVersionList',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->durMetricStatData) {
            $this->durMetricStatData->validate();
        }
        if (\is_array($this->networkList)) {
            Model::validateArray($this->networkList);
        }
        if (\is_array($this->onlinePeriods)) {
            Model::validateArray($this->onlinePeriods);
        }
        if (\is_array($this->osList)) {
            Model::validateArray($this->osList);
        }
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        if (\is_array($this->sdkVersionList)) {
            Model::validateArray($this->sdkVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callExp) {
            $res['CallExp'] = $this->callExp;
        }

        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }

        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }

        if (null !== $this->durMetricStatData) {
            $res['DurMetricStatData'] = null !== $this->durMetricStatData ? $this->durMetricStatData->toArray($noStream) : $this->durMetricStatData;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->networkList) {
            if (\is_array($this->networkList)) {
                $res['NetworkList'] = [];
                $n1 = 0;
                foreach ($this->networkList as $item1) {
                    $res['NetworkList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->onlineDuration) {
            $res['OnlineDuration'] = $this->onlineDuration;
        }

        if (null !== $this->onlinePeriods) {
            if (\is_array($this->onlinePeriods)) {
                $res['OnlinePeriods'] = [];
                $n1 = 0;
                foreach ($this->onlinePeriods as $item1) {
                    $res['OnlinePeriods'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->osList) {
            if (\is_array($this->osList)) {
                $res['OsList'] = [];
                $n1 = 0;
                foreach ($this->osList as $item1) {
                    $res['OsList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['Roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['Roles'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }

        if (null !== $this->sdkVersionList) {
            if (\is_array($this->sdkVersionList)) {
                $res['SdkVersionList'] = [];
                $n1 = 0;
                foreach ($this->sdkVersionList as $item1) {
                    $res['SdkVersionList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CallExp'])) {
            $model->callExp = $map['CallExp'];
        }

        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }

        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }

        if (isset($map['DurMetricStatData'])) {
            $model->durMetricStatData = durMetricStatData::fromMap($map['DurMetricStatData']);
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['NetworkList'])) {
            if (!empty($map['NetworkList'])) {
                $model->networkList = [];
                $n1 = 0;
                foreach ($map['NetworkList'] as $item1) {
                    $model->networkList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OnlineDuration'])) {
            $model->onlineDuration = $map['OnlineDuration'];
        }

        if (isset($map['OnlinePeriods'])) {
            if (!empty($map['OnlinePeriods'])) {
                $model->onlinePeriods = [];
                $n1 = 0;
                foreach ($map['OnlinePeriods'] as $item1) {
                    $model->onlinePeriods[$n1++] = onlinePeriods::fromMap($item1);
                }
            }
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['OsList'])) {
            if (!empty($map['OsList'])) {
                $model->osList = [];
                $n1 = 0;
                foreach ($map['OsList'] as $item1) {
                    $model->osList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['Roles'] as $item1) {
                    $model->roles[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }

        if (isset($map['SdkVersionList'])) {
            if (!empty($map['SdkVersionList'])) {
                $model->sdkVersionList = [];
                $n1 = 0;
                foreach ($map['SdkVersionList'] as $item1) {
                    $model->sdkVersionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
