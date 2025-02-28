<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMetaListResponseBody\items;

use AlibabaCloud\Dara\Model;

class meta extends Model
{
    /**
     * @var string
     */
    public $database;
    /**
     * @var string
     */
    public $size;
    /**
     * @var string
     */
    public $tables;
    protected $_name = [
        'database' => 'Database',
        'size'     => 'Size',
        'tables'   => 'Tables',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }

        return $model;
    }
}
