<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkTemplateFileContentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the application. Valid values:
     *
     *   **SQL**: SQL application
     *   **STREAMING**: streaming application
     *   **BATCH**: batch application
     *
     * @example SQL
     *
     * @var string
     */
    public $appType;

    /**
     * @description The content of the template.
     *
     * @example set spark.driver.resourceSpec=medium;set spark.executor.instances=2;set spark.executor.resourceSpec=medium;set spark.app.name=Spark SQL Test;
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the application template.
     *
     * @example 725204
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the resource group.
     *
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The type of the file. Valid values:
     *
     *   **folder**
     *   **file**
     *
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appType'           => 'AppType',
        'content'           => 'Content',
        'id'                => 'Id',
        'resourceGroupName' => 'ResourceGroupName',
        'type'              => 'Type',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
