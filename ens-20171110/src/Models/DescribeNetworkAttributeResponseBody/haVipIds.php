<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class haVipIds extends Model
{
    /**
     * @var string[]
     */
    public $haVipId;
    protected $_name = [
        'haVipId' => 'HaVipId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVipId) {
            $res['HaVipId'] = $this->haVipId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return haVipIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVipId'])) {
            if (!empty($map['HaVipId'])) {
                $model->haVipId = $map['HaVipId'];
            }
        }

        return $model;
    }
}
