<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ModifyDataSourceResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyDataSourceResponseBody\result\meta;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the data source was created. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-12-07T02:24:26.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the data source was last modified. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-12-07T02:24:26.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The parameters of the data source.
     *
     * @var meta
     */
    public $meta;

    /**
     * @description The name of the table.
     *
     * @example behavior
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'meta'        => 'meta',
        'tableName'   => 'tableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toMap() : null;
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        return $model;
    }
}
