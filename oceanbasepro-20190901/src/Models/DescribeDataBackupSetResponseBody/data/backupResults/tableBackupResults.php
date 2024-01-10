<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupResults;

use AlibabaCloud\Tea\Model;

class tableBackupResults extends Model
{
    /**
     * @example order_ce****_online
     *
     * @var string
     */
    public $database;

    /**
     * @example Create tag success
     *
     * @var string
     */
    public $message;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example tr_sale_order_****
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'database' => 'Database',
        'message'  => 'Message',
        'status'   => 'Status',
        'table'    => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return tableBackupResults
     */
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
