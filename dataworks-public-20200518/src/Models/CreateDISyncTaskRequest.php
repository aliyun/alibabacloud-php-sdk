<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDISyncTaskRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. This parameter can be left empty.
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The configuration of the synchronization node to be created. This operation is equivalent to node creation by using the code editor in the DataWorks console. For more information, see [Create a synchronization node by using the code editor](~~137717~~).
     *
     * You can call the CreateDISyncTask operation to create only batch synchronization nodes.
     * @example {"type":"job","version":"2.0","steps":[{"stepType":"mysql","parameter":{"envType":1,"datasource":"mysql_pub","column":["id","name","create_time","age","score","t_01"],"connection":[{"datasource":"mysql_pub","table":["u_pk"]}],"where":"","splitPk":"id","encoding":"UTF-8"},"name":"Reader","category":"reader"},{"stepType":"odps","parameter":{"partition":"pt=${bizdate}","truncate":true,"datasource":"odps_first","envType":1,"column":["id","name","create_time","age","score","t_01"],"emptyAsNull":false,"tableComment":"null","table":"u_pk"},"name":"Writer","category":"writer"}],"setting":{"executeMode":null,"errorLimit":{"record":""},"speed":{"concurrent":2,"throttle":false}},"order":{"hops":[{"from":"Reader","to":"Writer"}]}}
     *
     * @var string
     */
    public $taskContent;

    /**
     * @description The name of the synchronization node.
     *
     * @example new_di_task
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The settings that specify the storage path of the synchronization node and the resource group used by the node. The following fields are supported:
     *
     *   FileFolderPath: the storage path of the node.
     *   ResourceGroup: the identifier of the resource group for Data Integration that is used by the node. To query the identifier of the resource group, call the [ListResourceGroup](~~173913~~) operation.
     *
     * @var string
     */
    public $taskParam;

    /**
     * @description The type of the synchronization node.
     *
     * You can call the CreateDISyncTask operation to create only batch synchronization nodes. Set the value to DI_OFFLINE.
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
