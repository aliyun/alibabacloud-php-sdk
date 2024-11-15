<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateHaVipResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $haVipIds;

    /**
     * @example AAE90880-4970-4D81-A534-A6C0F3631F74
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'haVipIds'  => 'HaVipIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVipIds) {
            $res['HaVipIds'] = $this->haVipIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHaVipResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVipIds'])) {
            if (!empty($map['HaVipIds'])) {
                $model->haVipIds = $map['HaVipIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
