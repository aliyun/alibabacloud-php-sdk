<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ContinueCreateStackRequest\parameters;

class ContinueCreateStackRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $parallelism;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string[]
     */
    public $recreatingOptions;

    /**
     * @var string[]
     */
    public $recreatingResources;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'dryRun' => 'DryRun',
        'mode' => 'Mode',
        'parallelism' => 'Parallelism',
        'parameters' => 'Parameters',
        'ramRoleName' => 'RamRoleName',
        'recreatingOptions' => 'RecreatingOptions',
        'recreatingResources' => 'RecreatingResources',
        'regionId' => 'RegionId',
        'stackId' => 'StackId',
        'templateBody' => 'TemplateBody',
        'templateId' => 'TemplateId',
        'templateURL' => 'TemplateURL',
        'templateVersion' => 'TemplateVersion',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->recreatingOptions)) {
            Model::validateArray($this->recreatingOptions);
        }
        if (\is_array($this->recreatingResources)) {
            Model::validateArray($this->recreatingResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }

        if (null !== $this->recreatingOptions) {
            if (\is_array($this->recreatingOptions)) {
                $res['RecreatingOptions'] = [];
                $n1 = 0;
                foreach ($this->recreatingOptions as $item1) {
                    $res['RecreatingOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recreatingResources) {
            if (\is_array($this->recreatingResources)) {
                $res['RecreatingResources'] = [];
                $n1 = 0;
                foreach ($this->recreatingResources as $item1) {
                    $res['RecreatingResources'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = parameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }

        if (isset($map['RecreatingOptions'])) {
            if (!empty($map['RecreatingOptions'])) {
                $model->recreatingOptions = [];
                $n1 = 0;
                foreach ($map['RecreatingOptions'] as $item1) {
                    $model->recreatingOptions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RecreatingResources'])) {
            if (!empty($map['RecreatingResources'])) {
                $model->recreatingResources = [];
                $n1 = 0;
                foreach ($map['RecreatingResources'] as $item1) {
                    $model->recreatingResources[$n1] = $item1;
                    ++$n1;
                }
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
