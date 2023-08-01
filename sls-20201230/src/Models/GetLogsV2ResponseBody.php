<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2ResponseBody\meta;
use AlibabaCloud\Tea\Model;

class GetLogsV2ResponseBody extends Model
{
    /**
     * @var string[][]
     */
    public $data;

    /**
     * @var meta
     */
    public $meta;
    protected $_name = [
        'data' => 'data',
        'meta' => 'meta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogsV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = $map['data'];
            }
        }
        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }

        return $model;
    }
}
