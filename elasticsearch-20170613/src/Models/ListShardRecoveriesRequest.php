<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListShardRecoveriesRequest extends Model
{
    /**
     * @var bool
     */
    public $activeOnly;
    protected $_name = [
        'activeOnly' => 'activeOnly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeOnly) {
            $res['activeOnly'] = $this->activeOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListShardRecoveriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activeOnly'])) {
            $model->activeOnly = $map['activeOnly'];
        }

        return $model;
    }
}
