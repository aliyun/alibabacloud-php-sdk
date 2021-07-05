<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossBackupMetaListResponseBody\items;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @var string
     */
    public $tables;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'tables'   => 'Tables',
        'database' => 'Database',
        'size'     => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
