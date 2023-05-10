<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\driftDetection;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceCleaner;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceImport;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\templateParameterConstraints;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\templateScratch;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform;
use AlibabaCloud\Tea\Model;

class GetFeatureDetailsResponseBody extends Model
{
    /**
     * @var driftDetection
     */
    public $driftDetection;

    /**
     * @description The resource types that support the system tag `acs:ros:stackId`.
     *
     * @example EBF833DA-D0E2-52BE-92E2-59CA56BE834E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The names of properties that are supported by the resource type.
     *
     * @var resourceCleaner
     */
    public $resourceCleaner;

    /**
     * @var resourceImport
     */
    public $resourceImport;

    /**
     * @var templateParameterConstraints
     */
    public $templateParameterConstraints;

    /**
     * @description The names of the side effects. The StopInstance value indicates that an instance that is related to the specified resource is stopped.
     *
     * @var templateScratch
     */
    public $templateScratch;

    /**
     * @description The resource types that support the custom tag feature.
     *
     * @var terraform
     */
    public $terraform;
    protected $_name = [
        'driftDetection'               => 'DriftDetection',
        'requestId'                    => 'RequestId',
        'resourceCleaner'              => 'ResourceCleaner',
        'resourceImport'               => 'ResourceImport',
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
        if (null !== $this->driftDetection) {
            $res['DriftDetection'] = null !== $this->driftDetection ? $this->driftDetection->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceCleaner) {
            $res['ResourceCleaner'] = null !== $this->resourceCleaner ? $this->resourceCleaner->toMap() : null;
        }
        if (null !== $this->resourceImport) {
            $res['ResourceImport'] = null !== $this->resourceImport ? $this->resourceImport->toMap() : null;
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
        if (isset($map['DriftDetection'])) {
            $model->driftDetection = driftDetection::fromMap($map['DriftDetection']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceCleaner'])) {
            $model->resourceCleaner = resourceCleaner::fromMap($map['ResourceCleaner']);
        }
        if (isset($map['ResourceImport'])) {
            $model->resourceImport = resourceImport::fromMap($map['ResourceImport']);
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
