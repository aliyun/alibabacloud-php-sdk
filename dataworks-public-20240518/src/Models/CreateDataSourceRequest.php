<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataSourceRequest extends Model
{
    /**
     * @description The connection configurations of the data source, including the connection address, access identity, and environment information. The envType parameter specifies the environment in which the data source is used. Valid values of the envType parameter:
     *
     *   Dev: development environment
     *   Prod: production environment
     *
     * The parameters that you need to configure for the data source vary based on the mode in which the data source is added. For more information, see [Data source connection information (ConnectionProperties)](https://help.aliyun.com/document_detail/2852465.html).
     *
     * This parameter is required.
     *
     * @example {
     * "envType": "Prod",
     * "regionId": "cn-beijing",
     * "instanceId": "hgprecn-cn-x0r3oun4k001",
     * "database": "testdb",
     * "securityProtocol": "authTypeNone",
     * "authType": "Executor",
     * "authIdentity": "1107550004253538"
     * }
     *
     * @var string
     */
    public $connectionProperties;

    /**
     * @description The mode in which you want to add the data source. The mode varies based on the data source type. Valid values for MySQL data sources:
     *
     *   InstanceMode: instance mode
     *   UrlMode: connection string mode
     *
     * This parameter is required.
     *
     * @example UrlMode
     *
     * @var string
     */
    public $connectionPropertiesMode;

    /**
     * @description The description of the data source. The description cannot exceed 3,000 characters in length.
     *
     * @example this is a holo datasource
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the data source. The name can be up to 255 characters in length and can contain letters, digits, and underscores (_). The name must start with a letter.
     *
     * This parameter is required.
     *
     * @example demo_holo_datasource
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://dataworks.console.aliyun.com/overview) and go to the workspace management page to obtain the ID.
     *
     * This parameter is used to determine the DataWorks workspaces used for this API call.
     *
     * This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The type of the data source. More than 70 types of data sources are supported in DataWorks. For more information, see [Data source types](https://help.aliyun.com/document_detail/2852465.html).
     *
     * This parameter is required.
     *
     * @example hologres
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'connectionProperties' => 'ConnectionProperties',
        'connectionPropertiesMode' => 'ConnectionPropertiesMode',
        'description' => 'Description',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
        }
        if (null !== $this->connectionPropertiesMode) {
            $res['ConnectionPropertiesMode'] = $this->connectionPropertiesMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
        }
        if (isset($map['ConnectionPropertiesMode'])) {
            $model->connectionPropertiesMode = $map['ConnectionPropertiesMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
