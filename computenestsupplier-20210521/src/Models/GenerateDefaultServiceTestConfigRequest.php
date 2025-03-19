<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GenerateDefaultServiceTestConfigRequest extends Model
{
    /**
     * @description The service ID.
     *
     * This parameter is required.
     *
     * @example service-41ad58439b4b4bf8ae73
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service version.
     *
     * This parameter is required.
     *
     * @example draft
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The template name.
     *
     * @example test-1
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'serviceId' => 'ServiceId',
        'serviceVersion' => 'ServiceVersion',
        'templateName' => 'TemplateName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDefaultServiceTestConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
