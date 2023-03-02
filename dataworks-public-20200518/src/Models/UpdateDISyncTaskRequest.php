<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDISyncTaskRequest extends Model
{
    /**
     * @description The ID of the sync node to be updated. You can call the [ListFiles](~~173942~~) operation to query the ID of the node.
     *
     * @example 1000000
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * You must set this parameter to specify the DataWorks workspace in which the node resides.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The updated configuration of the sync node. This operation is equivalent to node update by using the code editor in the DataWorks console. For more information, see [Create a sync node by using the code editor](~~137717~~). You can call the UpdateDISyncTask operation to update only batch sync nodes. If you do not need to update the configuration of the sync node, leave this parameter empty.
     *
     * @example {"type":"job","version":"2.0","steps":[{"stepType":"mysql","parameter":{"envType":1,"datasource":"mysql_pub","column":["id","name","create_time","age","score","t_01"],"connection":[{"datasource":"mysql_pub","table":["u_pk"]}],"where":"","splitPk":"id","encoding":"UTF-8"},"name":"Reader","category":"reader"},{"stepType":"odps","parameter":{"partition":"pt=${bizdate}","truncate":true,"datasource":"odps_first","envType":1,"column":["id","name","create_time","age","score","t_01"],"emptyAsNull":false,"tableComment":"null","table":"u_pk"},"name":"Writer","category":"writer"}],"setting":{"executeMode":null,"errorLimit":{"record":""},"speed":{"concurrent":2,"throttle":false}},"order":{"hops":[{"from":"Reader","to":"Writer"}]}}
     *
     * @var string
     */
    public $taskContent;

    /**
     * @description The setting that updates the resource group used by the node. The value must be in the JSON format.
     *
     * If you do not need to update the resource group for the sync node, leave this parameter empty.
     * @example {"ResourceGroup":"S_res_group_XXX_XXXX"}
     *
     * @var string
     */
    public $taskParam;

    /**
     * @description The type of the sync node.
     *
     * You can call the UpdateDISyncTask operation to update only batch sync nodes. The value must be DI_OFFLINE.
     * @example DI_OFFLINE
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'fileId'      => 'FileId',
        'projectId'   => 'ProjectId',
        'taskContent' => 'TaskContent',
        'taskParam'   => 'TaskParam',
        'taskType'    => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->taskContent) {
            $res['TaskContent'] = $this->taskContent;
        }
        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDISyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TaskContent'])) {
            $model->taskContent = $map['TaskContent'];
        }
        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
