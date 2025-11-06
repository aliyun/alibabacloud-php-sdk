<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainByDomainNameResponseBody\tag;

use AlibabaCloud\Dara\Model;

class tag extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $vaue;
    protected $_name = [
        'key' => 'Key',
        'vaue' => 'Vaue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->vaue) {
            $res['Vaue'] = $this->vaue;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Vaue'])) {
            $model->vaue = $map['Vaue'];
        }

        return $model;
    }
}
