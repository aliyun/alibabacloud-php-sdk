<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody\data\paramList;

use AlibabaCloud\Dara\Model;

class valueDict extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'code' => 'Code',
        'desc' => 'Desc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
