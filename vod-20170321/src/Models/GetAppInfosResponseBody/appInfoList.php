<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosResponseBody;

use AlibabaCloud\Tea\Model;

class appInfoList extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The time when the application was created. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-03-01T08:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the application.
     *
     * @example my first app.
     *
     * @var string
     */
    public $description;

    /**
     * @description The last time when the application was modified. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-03-01T09:00:00Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The resource group ID.
     *
     * @example rg-aekzko7fsuj****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the application. Valid values:
     *
     *   **Normal**
     *   **Disable**
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the application. Valid values:
     *
     *   **System**
     *   **Custom**
     *
     * @example System
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'modificationTime' => 'ModificationTime',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
