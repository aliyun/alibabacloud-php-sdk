<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody\result\seatbid\bid\ads;

use AlibabaCloud\Tea\Model;

class trackers extends Model
{
    /**
     * @var string[]
     */
    public $imps;
    protected $_name = [
        'imps' => 'Imps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imps) {
            $res['Imps'] = $this->imps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trackers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Imps'])) {
            if (!empty($map['Imps'])) {
                $model->imps = $map['Imps'];
            }
        }

        return $model;
    }
}
