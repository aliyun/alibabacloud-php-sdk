<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestResponseBody\module\popularSuggestInfos;

use AlibabaCloud\Tea\Model;

class popularInfos extends Model
{
    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'displayName' => 'display_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['display_name'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return popularInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['display_name'])) {
            $model->displayName = $map['display_name'];
        }

        return $model;
    }
}
