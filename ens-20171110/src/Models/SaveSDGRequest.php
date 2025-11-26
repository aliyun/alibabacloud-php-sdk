<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class SaveSDGRequest extends Model
{
    /**
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'SDGId' => 'SDGId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
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
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
