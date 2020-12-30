<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVodTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $vodTemplateId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateConfig;
    protected $_name = [
        'vodTemplateId'  => 'VodTemplateId',
        'name'           => 'Name',
        'templateConfig' => 'TemplateConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vodTemplateId) {
            $res['VodTemplateId'] = $this->vodTemplateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
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
        if (isset($map['VodTemplateId'])) {
            $model->vodTemplateId = $map['VodTemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }

        return $model;
    }
}
