<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataSourceRequest extends Model
{
    /**
     * @description The connection configurations of the data source, including the connection address, access identity, and environment information. The envType parameter specifies the environment in which the data source is used. Valid values of the envType parameter:
     *
     *   Dev: development environment
     *   Prod: production environment
     *
     * The parameters that you need to configure to the data source vary based on the mode in which the data source is added. For more information, see [Data source connection information (ConnectionProperties)](https://help.aliyun.com/document_detail/2852465.html).
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
     * @description The mode in which the data source is added. The mode varies based on the data source type. Valid values:
     *
     *   InstanceMode: instance mode
     *   UrlMode: connection string mode
     *   CdhMode: CDH cluster mode
     *
     * @example UrlMode
     *
     * @var string
     */
    public $connectionPropertiesMode;

    /**
     * @description The description of the data source. The description cannot exceed 3,000 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The data source ID.
     *
     * This parameter is required.
     *
     * @example 16033
     *
     * @var int
     */
    public $id;

    /**
     * @description The DataWorks workspace ID.
     *
     * This parameter is required.
     *
     * @example 5678
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'connectionProperties' => 'ConnectionProperties',
        'connectionPropertiesMode' => 'ConnectionPropertiesMode',
        'description' => 'Description',
        'id' => 'Id',
        'projectId' => 'ProjectId',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataSourceRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
