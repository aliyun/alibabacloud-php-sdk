<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDISyncTaskRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. This parameter can be left empty
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to obtain the workspace ID.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The configurations of the batch synchronization task to be created. Calling this API operation to create a batch synchronization task is equivalent to creating a batch synchronization task by using the code editor in the DataWorks console. For more information, see [Create a synchronization node by using the code editor](https://help.aliyun.com/document_detail/137717.html).
     *
     * This parameter is required.
     * @example {"type":"job","version":"2.0","steps":[{"stepType":"mysql","parameter":{"envType":1,"datasource":"mysql_pub","column":["id","name","create_time","age","score","t_01"],"connection":[{"datasource":"mysql_pub","table":["u_pk"]}],"where":"","splitPk":"id","encoding":"UTF-8"},"name":"Reader","category":"reader"},{"stepType":"odps","parameter":{"partition":"pt=${bizdate}","truncate":true,"datasource":"odps_source","envType":1,"column":["id","name","create_time","age","score","t_01"],"emptyAsNull":false,"tableComment":"null","table":"u_pk"},"name":"Writer","category":"writer"}],"setting":{"executeMode":null,"errorLimit":{"record":""},"speed":{"concurrent":2,"throttle":false}},"order":{"hops":[{"from":"Reader","to":"Writer"}]}}
     *
     * @var string
     */
    public $taskContent;

    /**
     * @description The name of the data synchronization task.
     *
     * @example new_di_task
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The settings that specify the storage path of the data synchronization task and the resource group used by the task. The following parameters are supported:
     * - ResourceGroup: the identifier of the resource group for Data Integration that is used by the data synchronization task. You can call the [ListResourceGroup](https://help.aliyun.com/document_detail/173913.html) operation to query the identifier of the resource group.
     * @example {"FileFolderPath":"Business Flow/XXX/Data Integration","ResourceGroup":"S_res_group_XXX_XXXX"}
     *
     * @var string
     */
    public $taskParam;

    /**
     * @description The type of the data synchronization task.
     * This parameter is required.
     * @example DI_OFFLINE
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'projectId'   => 'ProjectId',
        'taskContent' => 'TaskContent',
        'taskName'    => 'TaskName',
        'taskParam'   => 'TaskParam',
        'taskType'    => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->taskContent) {
            $res['TaskContent'] = $this->taskContent;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
     * @return CreateDISyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TaskContent'])) {
            $model->taskContent = $map['TaskContent'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
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
