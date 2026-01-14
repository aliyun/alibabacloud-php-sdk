<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponseBody\areas;

use AlibabaCloud\Dara\Model;

class regionList extends Model
{
    /**
     * @var bool
     */
    public $chinaMainland;

    /**
     * @var string[]
     */
    public $ispTypeList;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var bool
     */
    public $multiAz;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $supportIpv6;
    protected $_name = [
        'chinaMainland' => 'ChinaMainland',
        'ispTypeList' => 'IspTypeList',
        'localName' => 'LocalName',
        'multiAz' => 'MultiAz',
        'regionId' => 'RegionId',
        'supportIpv6' => 'SupportIpv6',
    ];

    public function validate()
    {
        if (\is_array($this->ispTypeList)) {
            Model::validateArray($this->ispTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chinaMainland) {
            $res['ChinaMainland'] = $this->chinaMainland;
        }

        if (null !== $this->ispTypeList) {
            if (\is_array($this->ispTypeList)) {
                $res['IspTypeList'] = [];
                $n1 = 0;
                foreach ($this->ispTypeList as $item1) {
                    $res['IspTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->multiAz) {
            $res['MultiAz'] = $this->multiAz;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->supportIpv6) {
            $res['SupportIpv6'] = $this->supportIpv6;
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
        if (isset($map['ChinaMainland'])) {
            $model->chinaMainland = $map['ChinaMainland'];
        }

        if (isset($map['IspTypeList'])) {
            if (!empty($map['IspTypeList'])) {
                $model->ispTypeList = [];
                $n1 = 0;
                foreach ($map['IspTypeList'] as $item1) {
                    $model->ispTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['MultiAz'])) {
            $model->multiAz = $map['MultiAz'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SupportIpv6'])) {
            $model->supportIpv6 = $map['SupportIpv6'];
        }

        return $model;
    }
}
