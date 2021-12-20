<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ReplicationPrefixSet extends Model
{
    /**
     * @description Prefixs used to specify the object to replicate
     *
     * @var string[]
     */
    public $prefixs;
    protected $_name = [
        'prefixs' => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefixs) {
            $res['Prefix'] = $this->prefixs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplicationPrefixSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Prefix'])) {
            if (!empty($map['Prefix'])) {
                $model->prefixs = $map['Prefix'];
            }
        }

        return $model;
    }
}
