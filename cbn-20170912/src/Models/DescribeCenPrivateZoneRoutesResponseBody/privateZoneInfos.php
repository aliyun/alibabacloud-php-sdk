<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody\privateZoneInfos\privateZoneInfo;

class privateZoneInfos extends Model
{
    /**
     * @var privateZoneInfo[]
     */
    public $privateZoneInfo;
    protected $_name = [
        'privateZoneInfo' => 'PrivateZoneInfo',
    ];

    public function validate()
    {
        if (\is_array($this->privateZoneInfo)) {
            Model::validateArray($this->privateZoneInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateZoneInfo) {
            if (\is_array($this->privateZoneInfo)) {
                $res['PrivateZoneInfo'] = [];
                $n1 = 0;
                foreach ($this->privateZoneInfo as $item1) {
                    $res['PrivateZoneInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PrivateZoneInfo'])) {
            if (!empty($map['PrivateZoneInfo'])) {
                $model->privateZoneInfo = [];
                $n1 = 0;
                foreach ($map['PrivateZoneInfo'] as $item1) {
                    $model->privateZoneInfo[$n1++] = privateZoneInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
