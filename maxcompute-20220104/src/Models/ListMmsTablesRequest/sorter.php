<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesRequest;

use AlibabaCloud\Dara\Model;

class sorter extends Model
{
    /**
     * @var string
     */
    public $lastDdlTime;

    /**
     * @var string
     */
    public $numRows;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'lastDdlTime' => 'lastDdlTime',
        'numRows' => 'numRows',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastDdlTime) {
            $res['lastDdlTime'] = $this->lastDdlTime;
        }

        if (null !== $this->numRows) {
            $res['numRows'] = $this->numRows;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['lastDdlTime'])) {
            $model->lastDdlTime = $map['lastDdlTime'];
        }

        if (isset($map['numRows'])) {
            $model->numRows = $map['numRows'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
