<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgWhiteListAddOrUpdateRequest\whiteLists;
use AlibabaCloud\Tea\Model;

class DsgWhiteListAddOrUpdateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var whiteLists[]
     */
    public $whiteLists;
    protected $_name = [
        'whiteLists' => 'WhiteLists',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteLists) {
            $res['WhiteLists'] = [];
            if (null !== $this->whiteLists && \is_array($this->whiteLists)) {
                $n = 0;
                foreach ($this->whiteLists as $item) {
                    $res['WhiteLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgWhiteListAddOrUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteLists'])) {
            if (!empty($map['WhiteLists'])) {
                $model->whiteLists = [];
                $n                 = 0;
                foreach ($map['WhiteLists'] as $item) {
                    $model->whiteLists[$n++] = null !== $item ? whiteLists::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
