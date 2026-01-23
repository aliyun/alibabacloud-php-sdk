<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityAlertOfAllRuleScopeByWatchIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityAlertOfAllRuleScopeByWatchIdResponseBody\qualityAlertInfo\alertDutyList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityAlertOfAllRuleScopeByWatchIdResponseBody\qualityAlertInfo\alertUserList;

class qualityAlertInfo extends Model
{
    /**
     * @var string[]
     */
    public $alertDutyChannelList;

    /**
     * @var alertDutyList[]
     */
    public $alertDutyList;

    /**
     * @var string[]
     */
    public $alertQualityOwnerChannelList;

    /**
     * @var string[]
     */
    public $alertUserChannelList;

    /**
     * @var alertUserList[]
     */
    public $alertUserList;

    /**
     * @var bool
     */
    public $enableAlertQualityOwner;

    /**
     * @var int
     */
    public $watchId;
    protected $_name = [
        'alertDutyChannelList' => 'AlertDutyChannelList',
        'alertDutyList' => 'AlertDutyList',
        'alertQualityOwnerChannelList' => 'AlertQualityOwnerChannelList',
        'alertUserChannelList' => 'AlertUserChannelList',
        'alertUserList' => 'AlertUserList',
        'enableAlertQualityOwner' => 'EnableAlertQualityOwner',
        'watchId' => 'WatchId',
    ];

    public function validate()
    {
        if (\is_array($this->alertDutyChannelList)) {
            Model::validateArray($this->alertDutyChannelList);
        }
        if (\is_array($this->alertDutyList)) {
            Model::validateArray($this->alertDutyList);
        }
        if (\is_array($this->alertQualityOwnerChannelList)) {
            Model::validateArray($this->alertQualityOwnerChannelList);
        }
        if (\is_array($this->alertUserChannelList)) {
            Model::validateArray($this->alertUserChannelList);
        }
        if (\is_array($this->alertUserList)) {
            Model::validateArray($this->alertUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertDutyChannelList) {
            if (\is_array($this->alertDutyChannelList)) {
                $res['AlertDutyChannelList'] = [];
                $n1 = 0;
                foreach ($this->alertDutyChannelList as $item1) {
                    $res['AlertDutyChannelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertDutyList) {
            if (\is_array($this->alertDutyList)) {
                $res['AlertDutyList'] = [];
                $n1 = 0;
                foreach ($this->alertDutyList as $item1) {
                    $res['AlertDutyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertQualityOwnerChannelList) {
            if (\is_array($this->alertQualityOwnerChannelList)) {
                $res['AlertQualityOwnerChannelList'] = [];
                $n1 = 0;
                foreach ($this->alertQualityOwnerChannelList as $item1) {
                    $res['AlertQualityOwnerChannelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertUserChannelList) {
            if (\is_array($this->alertUserChannelList)) {
                $res['AlertUserChannelList'] = [];
                $n1 = 0;
                foreach ($this->alertUserChannelList as $item1) {
                    $res['AlertUserChannelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertUserList) {
            if (\is_array($this->alertUserList)) {
                $res['AlertUserList'] = [];
                $n1 = 0;
                foreach ($this->alertUserList as $item1) {
                    $res['AlertUserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableAlertQualityOwner) {
            $res['EnableAlertQualityOwner'] = $this->enableAlertQualityOwner;
        }

        if (null !== $this->watchId) {
            $res['WatchId'] = $this->watchId;
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
        if (isset($map['AlertDutyChannelList'])) {
            if (!empty($map['AlertDutyChannelList'])) {
                $model->alertDutyChannelList = [];
                $n1 = 0;
                foreach ($map['AlertDutyChannelList'] as $item1) {
                    $model->alertDutyChannelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertDutyList'])) {
            if (!empty($map['AlertDutyList'])) {
                $model->alertDutyList = [];
                $n1 = 0;
                foreach ($map['AlertDutyList'] as $item1) {
                    $model->alertDutyList[$n1] = alertDutyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertQualityOwnerChannelList'])) {
            if (!empty($map['AlertQualityOwnerChannelList'])) {
                $model->alertQualityOwnerChannelList = [];
                $n1 = 0;
                foreach ($map['AlertQualityOwnerChannelList'] as $item1) {
                    $model->alertQualityOwnerChannelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertUserChannelList'])) {
            if (!empty($map['AlertUserChannelList'])) {
                $model->alertUserChannelList = [];
                $n1 = 0;
                foreach ($map['AlertUserChannelList'] as $item1) {
                    $model->alertUserChannelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertUserList'])) {
            if (!empty($map['AlertUserList'])) {
                $model->alertUserList = [];
                $n1 = 0;
                foreach ($map['AlertUserList'] as $item1) {
                    $model->alertUserList[$n1] = alertUserList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableAlertQualityOwner'])) {
            $model->enableAlertQualityOwner = $map['EnableAlertQualityOwner'];
        }

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        return $model;
    }
}
