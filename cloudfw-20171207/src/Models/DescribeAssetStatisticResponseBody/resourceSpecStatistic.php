<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class resourceSpecStatistic extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $ipNumSpec;

    /**
     * @example 10
     *
     * @var int
     */
    public $ipNumUsed;

    /**
     * @var int
     */
    public $isIpNumEnough;

    /**
     * @var int
     */
    public $isRegionNumEnough;

    /**
     * @var int
     */
    public $isSuggestUpdate;

    /**
     * @var int
     */
    public $regionNumSpec;

    /**
     * @var int
     */
    public $regionNumUsed;

    /**
     * @var int
     */
    public $sensitiveDataIpNumSpec;

    /**
     * @var int
     */
    public $sensitiveDataIpNumUsed;
    protected $_name = [
        'ipNumSpec'              => 'IpNumSpec',
        'ipNumUsed'              => 'IpNumUsed',
        'isIpNumEnough'          => 'IsIpNumEnough',
        'isRegionNumEnough'      => 'IsRegionNumEnough',
        'isSuggestUpdate'        => 'IsSuggestUpdate',
        'regionNumSpec'          => 'RegionNumSpec',
        'regionNumUsed'          => 'RegionNumUsed',
        'sensitiveDataIpNumSpec' => 'SensitiveDataIpNumSpec',
        'sensitiveDataIpNumUsed' => 'SensitiveDataIpNumUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipNumSpec) {
            $res['IpNumSpec'] = $this->ipNumSpec;
        }
        if (null !== $this->ipNumUsed) {
            $res['IpNumUsed'] = $this->ipNumUsed;
        }
        if (null !== $this->isIpNumEnough) {
            $res['IsIpNumEnough'] = $this->isIpNumEnough;
        }
        if (null !== $this->isRegionNumEnough) {
            $res['IsRegionNumEnough'] = $this->isRegionNumEnough;
        }
        if (null !== $this->isSuggestUpdate) {
            $res['IsSuggestUpdate'] = $this->isSuggestUpdate;
        }
        if (null !== $this->regionNumSpec) {
            $res['RegionNumSpec'] = $this->regionNumSpec;
        }
        if (null !== $this->regionNumUsed) {
            $res['RegionNumUsed'] = $this->regionNumUsed;
        }
        if (null !== $this->sensitiveDataIpNumSpec) {
            $res['SensitiveDataIpNumSpec'] = $this->sensitiveDataIpNumSpec;
        }
        if (null !== $this->sensitiveDataIpNumUsed) {
            $res['SensitiveDataIpNumUsed'] = $this->sensitiveDataIpNumUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSpecStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpNumSpec'])) {
            $model->ipNumSpec = $map['IpNumSpec'];
        }
        if (isset($map['IpNumUsed'])) {
            $model->ipNumUsed = $map['IpNumUsed'];
        }
        if (isset($map['IsIpNumEnough'])) {
            $model->isIpNumEnough = $map['IsIpNumEnough'];
        }
        if (isset($map['IsRegionNumEnough'])) {
            $model->isRegionNumEnough = $map['IsRegionNumEnough'];
        }
        if (isset($map['IsSuggestUpdate'])) {
            $model->isSuggestUpdate = $map['IsSuggestUpdate'];
        }
        if (isset($map['RegionNumSpec'])) {
            $model->regionNumSpec = $map['RegionNumSpec'];
        }
        if (isset($map['RegionNumUsed'])) {
            $model->regionNumUsed = $map['RegionNumUsed'];
        }
        if (isset($map['SensitiveDataIpNumSpec'])) {
            $model->sensitiveDataIpNumSpec = $map['SensitiveDataIpNumSpec'];
        }
        if (isset($map['SensitiveDataIpNumUsed'])) {
            $model->sensitiveDataIpNumUsed = $map['SensitiveDataIpNumUsed'];
        }

        return $model;
    }
}
