<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVodTemplateRequest extends Model
{
    /**
     * @description The name of the template.
     *
     *   The name can be up to 128 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The configurations of the snapshot template. The value is a JSON-formatted string. For more information about the data structure, see the "SnapshotTemplateConfig" section of the [Media processing parameters](~~98618~~) topic.
     *
     * @example {"SnapshotConfig":{"Count":10,"SpecifiedOffsetTime":0,"Interval":1}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The ID of the snapshot template.
     *
     * @example 8c75a02e339b*****0b0d2c48171a22
     *
     * @var string
     */
    public $vodTemplateId;
    protected $_name = [
        'name'           => 'Name',
        'templateConfig' => 'TemplateConfig',
        'vodTemplateId'  => 'VodTemplateId',
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
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->vodTemplateId) {
            $res['VodTemplateId'] = $this->vodTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVodTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['VodTemplateId'])) {
            $model->vodTemplateId = $map['VodTemplateId'];
        }

        return $model;
    }
}
