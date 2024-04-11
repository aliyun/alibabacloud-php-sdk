<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddVodTemplateRequest extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Multi-application service](~~113600~~).
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the template.
     *
     *   The name cannot exceed 128 bytes.
     *   The value must be encoded in UTF-8.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The configurations of the snapshot template. The value must be a JSON string. For more information about the data structure, see [SnapshotTemplateConfig](~~98618~~).
     *
     * @example {"SnapshotConfig":{"Count":10,"SpecifiedOffsetTime":0,"Interval":1,"FrameType":"normal"},"SnapshotType":"NormalSnapshot"}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The type of the template. Set the value to **Snapshot**.
     *
     * @example Snapshot
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'appId'          => 'AppId',
        'name'           => 'Name',
        'templateConfig' => 'TemplateConfig',
        'templateType'   => 'TemplateType',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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

        return $model;
    }
}
