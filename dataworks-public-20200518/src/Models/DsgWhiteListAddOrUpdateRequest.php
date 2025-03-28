<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgWhiteListAddOrUpdateRequest\whiteLists;

class DsgWhiteListAddOrUpdateRequest extends Model
{
    /**
     * @var whiteLists[]
     */
    public $whiteLists;
    protected $_name = [
        'whiteLists' => 'WhiteLists',
    ];

    public function validate()
    {
        if (\is_array($this->whiteLists)) {
            Model::validateArray($this->whiteLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whiteLists) {
            if (\is_array($this->whiteLists)) {
                $res['WhiteLists'] = [];
                $n1 = 0;
                foreach ($this->whiteLists as $item1) {
                    $res['WhiteLists'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['WhiteLists'])) {
            if (!empty($map['WhiteLists'])) {
                $model->whiteLists = [];
                $n1 = 0;
                foreach ($map['WhiteLists'] as $item1) {
                    $model->whiteLists[$n1++] = whiteLists::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
