<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListVodTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class vodTemplateInfoList extends Model
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
     * @description The time when the template was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-30T08:05:59:57Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the template is the default one. Valid values:
     *
     *   **Default**: The template is the default one.
     *   **NotDefault**: The template is not the default one.
     *
     * @example NotDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description The time when the template was modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-30T09:05:59:97Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The name of the template.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The detailed configurations of the template. The value is a JSON-formatted string. For more information about the data structure, see the "SnapshotTemplateConfig" section of the [Media processing parameters](https://help.aliyun.com/document_detail/98618.html) topic.
     *
     * @example {\\"SnapshotConfig\\":{\\"Count\\":10,\\"SpecifiedOffsetTime\\":0,\\"Interval\\":1},\\"SnapshotType\\":\\"NormalSnapshot\\"}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The type of the template. Valid values:
     *
     *   **Snapshot**
     *   **DynamicImage**
     *
     * @example Snapshot
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The ID of the template.
     *
     * @example 7c49f2f42b1c*****0969fcd446690
     *
     * @var string
     */
    public $vodTemplateId;
    protected $_name = [
        'appId'          => 'AppId',
        'creationTime'   => 'CreationTime',
        'isDefault'      => 'IsDefault',
        'modifyTime'     => 'ModifyTime',
        'name'           => 'Name',
        'templateConfig' => 'TemplateConfig',
        'templateType'   => 'TemplateType',
        'vodTemplateId'  => 'VodTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->vodTemplateId) {
            $res['VodTemplateId'] = $this->vodTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vodTemplateInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['VodTemplateId'])) {
            $model->vodTemplateId = $map['VodTemplateId'];
        }

        return $model;
    }
}
