<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeRiskEventTopAttackAssetRequest extends Model
{
    /**
     * @var string[]
     */
    public $attackApp;

    /**
     * @var string
     */
    public $attackType;

    /**
     * @var string
     */
    public $buyVersion;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'attackApp' => 'AttackApp',
        'attackType' => 'AttackType',
        'buyVersion' => 'BuyVersion',
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->attackApp)) {
            Model::validateArray($this->attackApp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackApp) {
            if (\is_array($this->attackApp)) {
                $res['AttackApp'] = [];
                $n1 = 0;
                foreach ($this->attackApp as $item1) {
                    $res['AttackApp'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->buyVersion) {
            $res['BuyVersion'] = $this->buyVersion;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AttackApp'])) {
            if (!empty($map['AttackApp'])) {
                $model->attackApp = [];
                $n1 = 0;
                foreach ($map['AttackApp'] as $item1) {
                    $model->attackApp[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['BuyVersion'])) {
            $model->buyVersion = $map['BuyVersion'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
