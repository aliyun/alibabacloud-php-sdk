<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBPreviewResponseBody\items\item;

use AlibabaCloud\Tea\Model;

class dbNames extends Model
{
    /**
     * @var string[]
     */
    public $dbName;
    protected $_name = [
        'dbName' => 'DbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            if (!empty($map['DbName'])) {
                $model->dbName = $map['DbName'];
            }
        }

        return $model;
    }
}
