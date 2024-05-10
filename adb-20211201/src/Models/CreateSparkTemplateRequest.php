<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateSparkTemplateRequest extends Model
{
    /**
     * @description The application type. Valid values:
     *
     *   **SQL**
     *   **STREAMING**
     *   **BATCH**
     *
     * >  You do not need to specify this parameter when Type is set to folder.
     * @example SQL
     *
     * @var string
     */
    public $appType;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * This parameter is required.
     * @example amv-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the application template. The name can be up to 64 characters in length.
     *
     * This parameter is required.
     * @example batchfile
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the directory to which the application template belongs.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The type of the application template. Valid values:
     *
     *   **folder**: directory.
     *   **file**: application.
     *
     * This parameter is required.
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appType'     => 'AppType',
        'DBClusterId' => 'DBClusterId',
        'name'        => 'Name',
        'parentId'    => 'ParentId',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSparkTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
