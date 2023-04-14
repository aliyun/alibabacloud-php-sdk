<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListOfflineStoragesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var mixed[]
     */
    public $meta;

    /**
     * @example item
     *
     * @var int[]
     */
    public $tableName;
    protected $_name = [
        'meta'      => 'meta',
        'tableName' => 'tableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        return $model;
    }
}
