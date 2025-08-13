<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafOrderResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $expirationDate;
    protected $_name = [
        'expirationDate' => 'expirationDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expirationDate) {
            $res['expirationDate'] = $this->expirationDate;
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
        if (isset($map['expirationDate'])) {
            $model->expirationDate = $map['expirationDate'];
        }

        return $model;
    }
}
