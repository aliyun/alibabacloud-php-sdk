<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataSourceMetaResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The returned metadata of the data source. The returned metadata is in the JSON format.
     *
     * Parameter description:
     *
     *   dbName: the name of the database in which the data source resides.
     *   schema: the schema of the database.
     *   enable: indicates whether the database is available. A value of true indicates that the database is available. A value of false indicates that the database is unavailable.
     *   tableName: the name of the table in the database.
     *   tableInfos: the information about the table in the database.
     *
     * @example read datasource time out
     *
     * @var string
     */
    public $message;

    /**
     * @example {"dbTables":[{"dbName":"testdb","schema":[{"tableInfos":[{"dbName":"testdb","enable":true,"table":"table1","tableName":"table1"}]},{"tableInfos":[{"dbName":"testdb","enable":true,"table":"table2","tableName":"table2"}]}]}]}
     *
     * @var string
     */
    public $meta;

    /**
     * @description The reason why the metadata of the data source failed to be retrieved. If the metadata of the data source was retrieved, this parameter is left empty.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'message' => 'Message',
        'meta'    => 'Meta',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
