<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcZoneBlockConfigResponseBody;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcZoneBlockConfigResponseBody\blockConfig\ccZones;
use AlibabaCloud\Tea\Model;

class blockConfig extends Model
{
    /**
     * @var ccZones[]
     */
    public $ccZones;

    /**
     * @var int
     */
    public $enable;
    protected $_name = [
        'ccZones' => 'CcZones',
        'enable'  => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ccZones) {
            $res['CcZones'] = [];
            if (null !== $this->ccZones && \is_array($this->ccZones)) {
                $n = 0;
                foreach ($this->ccZones as $item) {
                    $res['CcZones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CcZones'])) {
            if (!empty($map['CcZones'])) {
                $model->ccZones = [];
                $n              = 0;
                foreach ($map['CcZones'] as $item) {
                    $model->ccZones[$n++] = null !== $item ? ccZones::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
