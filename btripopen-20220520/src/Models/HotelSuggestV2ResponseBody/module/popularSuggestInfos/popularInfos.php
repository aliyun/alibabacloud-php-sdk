<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2ResponseBody\module\popularSuggestInfos;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['display_name'] = $this->displayName;
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
        if (isset($map['display_name'])) {
            $model->displayName = $map['display_name'];
        }

        return $model;
    }
}
