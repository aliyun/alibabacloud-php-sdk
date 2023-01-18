<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListDNADBResponseBody;

use AlibabaCloud\Tea\Model;

class DBList extends Model
{
    /**
     * @example 88c6ca184c0e47098a5b665e2a12****
     *
     * @var string
     */
    public $DBId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example Video
     *
     * @var int
     */
    public $model;

    /**
     * @example example-name
     *
     * @var string
     */
    public $name;

    /**
     * @example active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'DBId'        => 'DBId',
        'description' => 'Description',
        'model'       => 'Model',
        'name'        => 'Name',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBId) {
            $res['DBId'] = $this->DBId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBId'])) {
            $model->DBId = $map['DBId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
