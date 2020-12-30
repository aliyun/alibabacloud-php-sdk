<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ModifyDataSourceResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\ModifyDataSourceResponseBody\result\meta;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'tableName'   => 'TableName',
        'meta'        => 'Meta',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
