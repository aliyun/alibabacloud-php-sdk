<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDIProjectConfigRequest extends Model
{
    /**
     * @description The type of the destinations of the synchronization solutions. This parameter cannot be left empty.
     *
     * Valid values: analyticdb_for_mysql, odps, elasticsearch, holo, mysql, and polardb.
     * @example odps
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The new default global configuration of synchronization solutions. The value indicates the processing rules of different types of DDL messages. The value must be in the JSON format. Example:
     *
     * Field description:
     *
     *   RENAMECOLUMN: renames a column.
     *   DROPTABLE: deletes a table.
     *   CREATETABLE: creates a table.
     *   MODIFYCOLUMN: changes the data type of a column.
     *   TRUNCATETABLE: clears a table.
     *   DROPCOLUMN: deletes a column.
     *   ADDCOLUMN: creates a column.
     *   RENAMETABLE: renames a table.
     *
     * DataWorks processes a DDL message of a specific type based on the following rules:
     *
     *   WARNING: ignores the message and records an alert in real-time synchronization logs. The alert contains information about the situation that the message is ignored because of an execution error.
     *   IGNORE: discards the message and does not send it to the destination.
     *   CRITICAL: terminates the real-time synchronization node and sets the node status to Failed.
     *   NORMAL: sends the message to the destination to process the message. Each destination processes DDL messages based on its own business logic. If DataWorks adopts the NORMAL policy, DataWorks only forwards DDL messages.
     *
     * @example {"RENAMECOLUMN":"WARNING","DROPTABLE":"WARNING","CREATETABLE":"WARNING","MODIFYCOLUMN":"WARNING","TRUNCATETABLE":"WARNING","DROPCOLUMN":"WARNING","ADDCOLUMN":"WARNING","RENAMETABLE":"WARNING"}
     *
     * @var string
     */
    public $projectConfig;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The type of the sources of the synchronization solutions.
     *
     * If you do not configure this parameter, DataWorks applies the default global configuration to all sources.
     * @example mysql
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'destinationType' => 'DestinationType',
        'projectConfig'   => 'ProjectConfig',
        'projectId'       => 'ProjectId',
        'sourceType'      => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->projectConfig) {
            $res['ProjectConfig'] = $this->projectConfig;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDIProjectConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['ProjectConfig'])) {
            $model->projectConfig = $map['ProjectConfig'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
