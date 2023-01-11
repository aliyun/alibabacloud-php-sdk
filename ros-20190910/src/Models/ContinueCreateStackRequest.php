<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class ContinueCreateStackRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example Recreate
     *
     * @var string
     */
    public $mode;

    /**
     * @example 1
     *
     * @var int
     */
    public $parallelism;

    /**
     * @description test
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @example test-role
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string[]
     */
    public $recreatingOptions;

    /**
     * @example WebServer
     *
     * @var string[]
     */
    public $recreatingResources;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example oss://ros-template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'dryRun'              => 'DryRun',
        'mode'                => 'Mode',
        'parallelism'         => 'Parallelism',
        'parameters'          => 'Parameters',
        'ramRoleName'         => 'RamRoleName',
        'recreatingOptions'   => 'RecreatingOptions',
        'recreatingResources' => 'RecreatingResources',
        'regionId'            => 'RegionId',
        'stackId'             => 'StackId',
        'templateBody'        => 'TemplateBody',
        'templateId'          => 'TemplateId',
        'templateURL'         => 'TemplateURL',
        'templateVersion'     => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->recreatingOptions) {
            $res['RecreatingOptions'] = $this->recreatingOptions;
        }
        if (null !== $this->recreatingResources) {
            $res['RecreatingResources'] = $this->recreatingResources;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinueCreateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RecreatingOptions'])) {
            if (!empty($map['RecreatingOptions'])) {
                $model->recreatingOptions = $map['RecreatingOptions'];
            }
        }
        if (isset($map['RecreatingResources'])) {
            if (!empty($map['RecreatingResources'])) {
                $model->recreatingResources = $map['RecreatingResources'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
