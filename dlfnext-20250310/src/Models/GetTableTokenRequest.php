<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class GetTableTokenRequest extends Model
{
    /**
     * @var bool
     */
    public $isInternal;
    protected $_name = [
        'isInternal' => 'isInternal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isInternal) {
            $res['isInternal'] = $this->isInternal;
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
        if (isset($map['isInternal'])) {
            $model->isInternal = $map['isInternal'];
        }

        return $model;
    }
}
