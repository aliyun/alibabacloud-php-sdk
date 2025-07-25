<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody;

use AlibabaCloud\Tea\Model;

class availableTtls extends Model
{
    /**
     * @var string[]
     */
    public $availableTtl;
    protected $_name = [
        'availableTtl' => 'AvailableTtl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableTtl) {
            $res['AvailableTtl'] = $this->availableTtl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableTtls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableTtl'])) {
            if (!empty($map['AvailableTtl'])) {
                $model->availableTtl = $map['AvailableTtl'];
            }
        }

        return $model;
    }
}
