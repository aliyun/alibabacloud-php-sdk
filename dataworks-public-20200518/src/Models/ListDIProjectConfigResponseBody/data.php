<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIProjectConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The default global configuration of sync solutions. The value indicates the processing rules of different types of DDL messages. Example:
     *
     * Field description:
     *
     *   RENAMECOLUMN: renames the column.
     *   DROPTABLE: deletes the table.
     *   CREATETABLE: creates a table.
     *   MODIFYCOLUMN: changes the column data type.
     *   TRUNCATETABLE: clears the table.
     *   DROPCOLUMN: deletes the column.
     *   ADDCOLUMN: creates a column.
     *   RENAMETABLE: renames the table.
     *
     * DataWorks processes a DDL message of a specific type based on the following policies after it receives the message:
     *
     *   WARNING: ignores the message and records an alert in real-time sync logs. The alert contains information about the situation that the message is ignored because of an execution error.
     *   IGNORE: discards the message and does not send it to the destination data source.
     *   CRITICAL: terminates the real-time sync node and sets the node status to Failed.
     *   NORMAL: sends the message to the destination data source to process the message. Each destination data source may process DDL messages based on its own business logic. If DataWorks adopts the NORMAL policy, DataWorks only forwards DDL messages.
     *
     * @example {"RENAMECOLUMN":"WARNING","DROPTABLE":"WARNING","CREATETABLE":"WARNING","MODIFYCOLUMN":"WARNING","TRUNCATETABLE":"WARNING","DROPCOLUMN":"WARNING","ADDCOLUMN":"WARNING","RENAMETABLE":"WARNING"}
     *
     * @var string
     */
    public $config;
    protected $_name = [
        'config' => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        return $model;
    }
}
