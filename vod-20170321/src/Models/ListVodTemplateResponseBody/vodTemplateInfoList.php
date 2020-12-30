<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListVodTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class vodTemplateInfoList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $vodTemplateId;

    /**
     * @var string
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'isDefault'      => 'IsDefault',
        'appId'          => 'AppId',
        'templateType'   => 'TemplateType',
        'vodTemplateId'  => 'VodTemplateId',
        'templateConfig' => 'TemplateConfig',
        'name'           => 'Name',
        'modifyTime'     => 'ModifyTime',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->vodTemplateId) {
            $res['VodTemplateId'] = $this->vodTemplateId;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['VodTemplateId'])) {
            $model->vodTemplateId = $map['VodTemplateId'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
