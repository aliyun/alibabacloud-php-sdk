<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\driftDetection;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceCleaner;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceImport;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\templateParameterConstraints;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\templateScratch;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform;

class GetFeatureDetailsResponseBody extends Model
{
    /**
     * @var driftDetection
     */
    public $driftDetection;

    /**
     * @var string
     */
    public $requestId;

    /**
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
     * @var templateScratch
     */
    public $templateScratch;

    /**
     * @var terraform
     */
    public $terraform;
    protected $_name = [
        'driftDetection' => 'DriftDetection',
        'requestId' => 'RequestId',
        'resourceCleaner' => 'ResourceCleaner',
        'resourceImport' => 'ResourceImport',
        'templateParameterConstraints' => 'TemplateParameterConstraints',
        'templateScratch' => 'TemplateScratch',
        'terraform' => 'Terraform',
    ];

    public function validate()
    {
        if (null !== $this->driftDetection) {
            $this->driftDetection->validate();
        }
        if (null !== $this->resourceCleaner) {
            $this->resourceCleaner->validate();
        }
        if (null !== $this->resourceImport) {
            $this->resourceImport->validate();
        }
        if (null !== $this->templateParameterConstraints) {
            $this->templateParameterConstraints->validate();
        }
        if (null !== $this->templateScratch) {
            $this->templateScratch->validate();
        }
        if (null !== $this->terraform) {
            $this->terraform->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driftDetection) {
            $res['DriftDetection'] = null !== $this->driftDetection ? $this->driftDetection->toArray($noStream) : $this->driftDetection;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceCleaner) {
            $res['ResourceCleaner'] = null !== $this->resourceCleaner ? $this->resourceCleaner->toArray($noStream) : $this->resourceCleaner;
        }

        if (null !== $this->resourceImport) {
            $res['ResourceImport'] = null !== $this->resourceImport ? $this->resourceImport->toArray($noStream) : $this->resourceImport;
        }

        if (null !== $this->templateParameterConstraints) {
            $res['TemplateParameterConstraints'] = null !== $this->templateParameterConstraints ? $this->templateParameterConstraints->toArray($noStream) : $this->templateParameterConstraints;
        }

        if (null !== $this->templateScratch) {
            $res['TemplateScratch'] = null !== $this->templateScratch ? $this->templateScratch->toArray($noStream) : $this->templateScratch;
        }

        if (null !== $this->terraform) {
            $res['Terraform'] = null !== $this->terraform ? $this->terraform->toArray($noStream) : $this->terraform;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
