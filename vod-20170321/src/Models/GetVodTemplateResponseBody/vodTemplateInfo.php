<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class vodTemplateInfo extends Model
{
    /**
     * @description The name of the template.
     *
     * @example 2018-11-30T08:05:59:57Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the request.
     *
     * @example NotDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @example 2018-11-30T09:05:59:57Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Queries a single snapshot template.
     *
     * @example {\"SnapshotConfig\":{\"Count\":10,\"SpecifiedOffsetTime\":0,\"Interval\":1},\"SnapshotType\":\"NormalSnapshot\"}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The operation that you want to perform. Set the value to **GetVodTemplate**.
     *
     * @example Snapshot
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The detailed configurations of the template. The value is a JSON-formatted string. For more information about the data structure, see the "SnapshotTemplateConfig" section of the [Media processing parameters](~~98618~~) topic.
     *
     * @example 7c49f2f4c09*****69fcd446690
     *
     * @var string
     */
    public $vodTemplateId;
    protected $_name = [
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
     * @return vodTemplateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
