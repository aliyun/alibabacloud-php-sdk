<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSwitchRegionDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetSwitchRegionDetailResponseBody\data\regionStatus;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1692858597000
     *
     * @var int
     */
    public $gmtIsAgreeModified;

    /**
     * @example 1692858597000
     *
     * @var int
     */
    public $gmtNoticed;

    /**
     * @example true
     *
     * @var string
     */
    public $isAgree;

    /**
     * @example YES
     *
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
    }

    public function toMap()
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
            $res['RegionStatus'] = [];
            if (null !== $this->regionStatus && \is_array($this->regionStatus)) {
                $n = 0;
                foreach ($this->regionStatus as $item) {
                    $res['RegionStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                   = 0;
                foreach ($map['RegionStatus'] as $item) {
                    $model->regionStatus[$n++] = null !== $item ? regionStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
