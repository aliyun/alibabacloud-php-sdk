<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetCheckPointRequest extends Model
{
    /**
     * @var int
     */
    public $shard;
    protected $_name = [
        'shard' => 'shard',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shard) {
            $res['shard'] = $this->shard;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['shard'])) {
            $model->shard = $map['shard'];
        }

        return $model;
    }
}
