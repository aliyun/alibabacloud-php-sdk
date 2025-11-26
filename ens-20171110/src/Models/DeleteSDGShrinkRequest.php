<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DeleteSDGShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $SDGIdShrink;
    protected $_name = [
        'SDGIdShrink' => 'SDGId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SDGIdShrink) {
            $res['SDGId'] = $this->SDGIdShrink;
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
        if (isset($map['SDGId'])) {
            $model->SDGIdShrink = $map['SDGId'];
        }

        return $model;
    }
}
