<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddVodTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $subTemplateType;

    /**
     * @var string
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'name'            => 'Name',
        'templateType'    => 'TemplateType',
        'subTemplateType' => 'SubTemplateType',
        'templateConfig'  => 'TemplateConfig',
        'appId'           => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->subTemplateType) {
            $res['SubTemplateType'] = $this->subTemplateType;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddVodTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['SubTemplateType'])) {
            $model->subTemplateType = $map['SubTemplateType'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
