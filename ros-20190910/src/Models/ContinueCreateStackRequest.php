<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class ContinueCreateStackRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string[]
     */
    public $recreatingResources;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var int
     */
    public $parallelism;
    protected $_name = [
        'stackId'             => 'StackId',
        'regionId'            => 'RegionId',
        'ramRoleName'         => 'RamRoleName',
        'mode'                => 'Mode',
        'templateBody'        => 'TemplateBody',
        'templateURL'         => 'TemplateURL',
        'dryRun'              => 'DryRun',
        'templateId'          => 'TemplateId',
        'templateVersion'     => 'TemplateVersion',
        'recreatingResources' => 'RecreatingResources',
        'parameters'          => 'Parameters',
        'parallelism'         => 'Parallelism',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->recreatingResources) {
            $res['RecreatingResources'] = $this->recreatingResources;
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
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
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
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['RecreatingResources'])) {
            if (!empty($map['RecreatingResources'])) {
                $model->recreatingResources = $map['RecreatingResources'];
            }
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
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }

        return $model;
    }
}
