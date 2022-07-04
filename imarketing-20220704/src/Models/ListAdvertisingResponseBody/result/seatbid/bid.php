<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody\result\seatbid;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody\result\seatbid\bid\ads;
use AlibabaCloud\Tea\Model;

class bid extends Model
{
    /**
     * @var ads[]
     */
    public $ads;

    /**
     * @var string
     */
    public $impid;
    protected $_name = [
        'ads'   => 'Ads',
        'impid' => 'Impid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ads) {
            $res['Ads'] = [];
            if (null !== $this->ads && \is_array($this->ads)) {
                $n = 0;
                foreach ($this->ads as $item) {
                    $res['Ads'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->impid) {
            $res['Impid'] = $this->impid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bid
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ads'])) {
            if (!empty($map['Ads'])) {
                $model->ads = [];
                $n          = 0;
                foreach ($map['Ads'] as $item) {
                    $model->ads[$n++] = null !== $item ? ads::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Impid'])) {
            $model->impid = $map['Impid'];
        }

        return $model;
    }
}
