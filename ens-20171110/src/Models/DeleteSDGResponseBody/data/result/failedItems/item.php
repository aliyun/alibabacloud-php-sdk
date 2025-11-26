<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody\data\result\failedItems;

use AlibabaCloud\Dara\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $sdgId;
    protected $_name = [
        'sdgId' => 'SdgId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sdgId) {
            $res['SdgId'] = $this->sdgId;
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
        if (isset($map['SdgId'])) {
            $model->sdgId = $map['SdgId'];
        }

        return $model;
    }
}
