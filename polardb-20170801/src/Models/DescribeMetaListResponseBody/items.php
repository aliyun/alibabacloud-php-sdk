<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMetaListResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $database;

    /**
     * @var int[]
     */
    public $size;

    /**
     * @var string[]
     */
    public $tables;
    protected $_name = [
        'database' => 'Database',
        'size' => 'Size',
        'tables' => 'Tables',
    ];

    public function validate()
    {
        if (\is_array($this->size)) {
            Model::validateArray($this->size);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->size) {
            if (\is_array($this->size)) {
                $res['Size'] = [];
                $n1 = 0;
                foreach ($this->size as $item1) {
                    $res['Size'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Size'])) {
                $model->size = [];
                $n1 = 0;
                foreach ($map['Size'] as $item1) {
                    $model->size[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
