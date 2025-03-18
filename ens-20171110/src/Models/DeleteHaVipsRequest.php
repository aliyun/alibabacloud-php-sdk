<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteHaVipsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $haVipIds;
    protected $_name = [
        'haVipIds' => 'HaVipIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVipIds) {
            $res['HaVipIds'] = $this->haVipIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHaVipsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVipIds'])) {
            if (!empty($map['HaVipIds'])) {
                $model->haVipIds = $map['HaVipIds'];
            }
        }

        return $model;
    }
}
