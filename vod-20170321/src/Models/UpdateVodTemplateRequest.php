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
     * @description Modifies a snapshot template.
     *
     * @example {"SnapshotConfig":{"Count":10,"SpecifiedOffsetTime":0,"Interval":1}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description The operation that you want to perform. Set the value to **UpdateVodTemplate**.
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
