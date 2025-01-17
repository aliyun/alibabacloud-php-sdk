<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSwitchRegionDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSwitchRegionDetailResponseBody\data\regionStatus;

class data extends Model
{
    /**
     * @var int
     */
    public $gmtIsAgreeModified;
    /**
     * @var int
     */
    public $gmtNoticed;
    /**
     * @var string
     */
    public $isAgree;
    /**
     * @var string
     */
    public $isNoticed;
    /**
     * @var regionStatus[]
     */
    public $regionStatus;
    protected $_name = [
        'gmtIsAgreeModified' => 'GmtIsAgreeModified',
        'gmtNoticed'         => 'GmtNoticed',
        'isAgree'            => 'IsAgree',
        'isNoticed'          => 'IsNoticed',
        'regionStatus'       => 'RegionStatus',
    ];

    public function validate()
    {
        if (\is_array($this->regionStatus)) {
            Model::validateArray($this->regionStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtIsAgreeModified) {
            $res['GmtIsAgreeModified'] = $this->gmtIsAgreeModified;
        }

        if (null !== $this->gmtNoticed) {
            $res['GmtNoticed'] = $this->gmtNoticed;
        }

        if (null !== $this->isAgree) {
            $res['IsAgree'] = $this->isAgree;
        }

        if (null !== $this->isNoticed) {
            $res['IsNoticed'] = $this->isNoticed;
        }

        if (null !== $this->regionStatus) {
            if (\is_array($this->regionStatus)) {
                $res['RegionStatus'] = [];
                $n1                  = 0;
                foreach ($this->regionStatus as $item1) {
                    $res['RegionStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GmtIsAgreeModified'])) {
            $model->gmtIsAgreeModified = $map['GmtIsAgreeModified'];
        }

        if (isset($map['GmtNoticed'])) {
            $model->gmtNoticed = $map['GmtNoticed'];
        }

        if (isset($map['IsAgree'])) {
            $model->isAgree = $map['IsAgree'];
        }

        if (isset($map['IsNoticed'])) {
            $model->isNoticed = $map['IsNoticed'];
        }

        if (isset($map['RegionStatus'])) {
            if (!empty($map['RegionStatus'])) {
                $model->regionStatus = [];
                $n1                  = 0;
                foreach ($map['RegionStatus'] as $item1) {
                    $model->regionStatus[$n1++] = regionStatus::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
