<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAccessInstanceVSwitchListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAccessInstanceVSwitchListResponseBody\zones\vSwitchList;

class zones extends Model
{
    /**
     * @var vSwitchList[]
     */
    public $vSwitchList;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vSwitchList' => 'VSwitchList',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchList)) {
            Model::validateArray($this->vSwitchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vSwitchList) {
            if (\is_array($this->vSwitchList)) {
                $res['VSwitchList'] = [];
                $n1 = 0;
                foreach ($this->vSwitchList as $item1) {
                    $res['VSwitchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['VSwitchList'])) {
            if (!empty($map['VSwitchList'])) {
                $model->vSwitchList = [];
                $n1 = 0;
                foreach ($map['VSwitchList'] as $item1) {
                    $model->vSwitchList[$n1] = vSwitchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
