<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupResults;

use AlibabaCloud\Dara\Model;

class tableBackupResults extends Model
{
    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'database' => 'Database',
        'message' => 'Message',
        'status' => 'Status',
        'table' => 'Table',
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

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->table) {
            $res['Table'] = $this->table;
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

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
