<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ReplicationRules extends Model
{
    /**
     * @description the container of id
     *
     * @var string[]
     */
    public $ids;
    protected $_name = [
        'ids' => 'ID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['ID'] = $this->ids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplicationRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ID'])) {
            if (!empty($map['ID'])) {
                $model->ids = $map['ID'];
            }
        }

        return $model;
    }
}
