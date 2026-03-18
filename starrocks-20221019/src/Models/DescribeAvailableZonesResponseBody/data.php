<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeAvailableZonesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $officialAvailableZones;

    /**
     * @var string[]
     */
    public $trialAvailableZones;
    protected $_name = [
        'officialAvailableZones' => 'OfficialAvailableZones',
        'trialAvailableZones' => 'TrialAvailableZones',
    ];

    public function validate()
    {
        if (\is_array($this->officialAvailableZones)) {
            Model::validateArray($this->officialAvailableZones);
        }
        if (\is_array($this->trialAvailableZones)) {
            Model::validateArray($this->trialAvailableZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->officialAvailableZones) {
            if (\is_array($this->officialAvailableZones)) {
                $res['OfficialAvailableZones'] = [];
                $n1 = 0;
                foreach ($this->officialAvailableZones as $item1) {
                    $res['OfficialAvailableZones'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trialAvailableZones) {
            if (\is_array($this->trialAvailableZones)) {
                $res['TrialAvailableZones'] = [];
                $n1 = 0;
                foreach ($this->trialAvailableZones as $item1) {
                    $res['TrialAvailableZones'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['OfficialAvailableZones'])) {
            if (!empty($map['OfficialAvailableZones'])) {
                $model->officialAvailableZones = [];
                $n1 = 0;
                foreach ($map['OfficialAvailableZones'] as $item1) {
                    $model->officialAvailableZones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TrialAvailableZones'])) {
            if (!empty($map['TrialAvailableZones'])) {
                $model->trialAvailableZones = [];
                $n1 = 0;
                foreach ($map['TrialAvailableZones'] as $item1) {
                    $model->trialAvailableZones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
