<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceCleaner;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\templateParameterConstraints;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\templateScratch;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform;
use AlibabaCloud\Tea\Model;

class GetFeatureDetailsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example EBF833DA-D0E2-52BE-92E2-59CA56BE834E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details of the resource cleaner feature.
     *
     * @var resourceCleaner
     */
    public $resourceCleaner;

    /**
     * @description Details of the template parameter constraint feature.
     *
     * @var templateParameterConstraints
     */
    public $templateParameterConstraints;

    /**
     * @description Details of the scenario feature.
     *
     * @var templateScratch
     */
    public $templateScratch;

    /**
     * @description Details of the Terraform hosting feature.
     *
     * @var terraform
     */
    public $terraform;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'resourceCleaner'              => 'ResourceCleaner',
        'templateParameterConstraints' => 'TemplateParameterConstraints',
        'templateScratch'              => 'TemplateScratch',
        'terraform'                    => 'Terraform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceCleaner) {
            $res['ResourceCleaner'] = null !== $this->resourceCleaner ? $this->resourceCleaner->toMap() : null;
        }
        if (null !== $this->templateParameterConstraints) {
            $res['TemplateParameterConstraints'] = null !== $this->templateParameterConstraints ? $this->templateParameterConstraints->toMap() : null;
        }
        if (null !== $this->templateScratch) {
            $res['TemplateScratch'] = null !== $this->templateScratch ? $this->templateScratch->toMap() : null;
        }
        if (null !== $this->terraform) {
            $res['Terraform'] = null !== $this->terraform ? $this->terraform->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFeatureDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceCleaner'])) {
            $model->resourceCleaner = resourceCleaner::fromMap($map['ResourceCleaner']);
        }
        if (isset($map['TemplateParameterConstraints'])) {
            $model->templateParameterConstraints = templateParameterConstraints::fromMap($map['TemplateParameterConstraints']);
        }
        if (isset($map['TemplateScratch'])) {
            $model->templateScratch = templateScratch::fromMap($map['TemplateScratch']);
        }
        if (isset($map['Terraform'])) {
            $model->terraform = terraform::fromMap($map['Terraform']);
        }

        return $model;
    }
}
