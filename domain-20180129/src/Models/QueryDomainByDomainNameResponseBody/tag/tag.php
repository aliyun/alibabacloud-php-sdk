<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainByDomainNameResponseBody\tag;

use AlibabaCloud\Tea\Model;

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
        'key'  => 'Key',
        'vaue' => 'Vaue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return tag
     */
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
