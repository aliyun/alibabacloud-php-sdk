<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListRegionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListRegionsResponseBody\regions\regionInfo;

class regions extends Model
{
    /**
     * @var regionInfo[]
     */
    public $regionInfo;
    protected $_name = [
        'regionInfo' => 'RegionInfo',
    ];

    public function validate()
    {
        if (\is_array($this->regionInfo)) {
            Model::validateArray($this->regionInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionInfo) {
            if (\is_array($this->regionInfo)) {
                $res['RegionInfo'] = [];
                $n1 = 0;
                foreach ($this->regionInfo as $item1) {
                    $res['RegionInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionInfo'])) {
            if (!empty($map['RegionInfo'])) {
                $model->regionInfo = [];
                $n1 = 0;
                foreach ($map['RegionInfo'] as $item1) {
                    $model->regionInfo[$n1++] = regionInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
