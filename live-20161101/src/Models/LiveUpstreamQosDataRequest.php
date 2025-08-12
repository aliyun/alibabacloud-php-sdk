<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class LiveUpstreamQosDataRequest extends Model
{
    /**
     * @var string[]
     */
    public $cdnDomains;

    /**
     * @var string[]
     */
    public $cdnIsps;

    /**
     * @var string[]
     */
    public $cdnProvinces;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $kwaiSidcs;

    /**
     * @var int[]
     */
    public $kwaiTsc;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $upstreamDomains;
    protected $_name = [
        'cdnDomains' => 'CdnDomains',
        'cdnIsps' => 'CdnIsps',
        'cdnProvinces' => 'CdnProvinces',
        'endTime' => 'EndTime',
        'kwaiSidcs' => 'KwaiSidcs',
        'kwaiTsc' => 'KwaiTsc',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'upstreamDomains' => 'UpstreamDomains',
    ];

    public function validate()
    {
        if (\is_array($this->cdnDomains)) {
            Model::validateArray($this->cdnDomains);
        }
        if (\is_array($this->cdnIsps)) {
            Model::validateArray($this->cdnIsps);
        }
        if (\is_array($this->cdnProvinces)) {
            Model::validateArray($this->cdnProvinces);
        }
        if (\is_array($this->kwaiSidcs)) {
            Model::validateArray($this->kwaiSidcs);
        }
        if (\is_array($this->kwaiTsc)) {
            Model::validateArray($this->kwaiTsc);
        }
        if (\is_array($this->upstreamDomains)) {
            Model::validateArray($this->upstreamDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdnDomains) {
            if (\is_array($this->cdnDomains)) {
                $res['CdnDomains'] = [];
                $n1 = 0;
                foreach ($this->cdnDomains as $item1) {
                    $res['CdnDomains'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cdnIsps) {
            if (\is_array($this->cdnIsps)) {
                $res['CdnIsps'] = [];
                $n1 = 0;
                foreach ($this->cdnIsps as $item1) {
                    $res['CdnIsps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cdnProvinces) {
            if (\is_array($this->cdnProvinces)) {
                $res['CdnProvinces'] = [];
                $n1 = 0;
                foreach ($this->cdnProvinces as $item1) {
                    $res['CdnProvinces'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->kwaiSidcs) {
            if (\is_array($this->kwaiSidcs)) {
                $res['KwaiSidcs'] = [];
                $n1 = 0;
                foreach ($this->kwaiSidcs as $item1) {
                    $res['KwaiSidcs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->kwaiTsc) {
            if (\is_array($this->kwaiTsc)) {
                $res['KwaiTsc'] = [];
                $n1 = 0;
                foreach ($this->kwaiTsc as $item1) {
                    $res['KwaiTsc'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->upstreamDomains) {
            if (\is_array($this->upstreamDomains)) {
                $res['UpstreamDomains'] = [];
                $n1 = 0;
                foreach ($this->upstreamDomains as $item1) {
                    $res['UpstreamDomains'][$n1] = $item1;
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
        if (isset($map['CdnDomains'])) {
            if (!empty($map['CdnDomains'])) {
                $model->cdnDomains = [];
                $n1 = 0;
                foreach ($map['CdnDomains'] as $item1) {
                    $model->cdnDomains[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CdnIsps'])) {
            if (!empty($map['CdnIsps'])) {
                $model->cdnIsps = [];
                $n1 = 0;
                foreach ($map['CdnIsps'] as $item1) {
                    $model->cdnIsps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CdnProvinces'])) {
            if (!empty($map['CdnProvinces'])) {
                $model->cdnProvinces = [];
                $n1 = 0;
                foreach ($map['CdnProvinces'] as $item1) {
                    $model->cdnProvinces[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['KwaiSidcs'])) {
            if (!empty($map['KwaiSidcs'])) {
                $model->kwaiSidcs = [];
                $n1 = 0;
                foreach ($map['KwaiSidcs'] as $item1) {
                    $model->kwaiSidcs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KwaiTsc'])) {
            if (!empty($map['KwaiTsc'])) {
                $model->kwaiTsc = [];
                $n1 = 0;
                foreach ($map['KwaiTsc'] as $item1) {
                    $model->kwaiTsc[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UpstreamDomains'])) {
            if (!empty($map['UpstreamDomains'])) {
                $model->upstreamDomains = [];
                $n1 = 0;
                foreach ($map['UpstreamDomains'] as $item1) {
                    $model->upstreamDomains[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
