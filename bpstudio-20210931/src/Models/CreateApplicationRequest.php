<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\CreateApplicationRequest\instances;
use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $areaId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example 1600765710019
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The parameters that are used to configure the application you want to create. For example, enableMonitor specifies whether to automatically create a CloudMonitor task for the application, and enableReport specifies whether to generate reports.
     *
     * @example {"enableMonitor":"0", "enableReport":"1"}
     *
     * @var string[]
     */
    public $configuration;

    /**
     * @description The instances in which you want to create the application. You can create applications in an existing virtual private cloud (VPC).
     *
     * @var instances[]
     */
    public $instances;

    /**
     * @description The name of the application.
     *
     *   The application name must be unique. You can call the [ListApplication](https://www.alibabacloud.com/help/en/bp-studio/latest/api-bpstudio-2021-09-31-listapplication) operation to query the existing applications.
     *   The application name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http:// or https://`. The name can contain letters, digits, underscores (\_), and hyphens (-).
     *
     * @example cadt-application
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group to which the application you want to create belongs.
     *
     * @example rg-acfmyjt3c5om3hi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the template.
     *
     * @example 0KSHPM6SJU03TNZP
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The parameter values that are contained in the template. If the template contains no parameter values, the default values are used.
     *
     * @example {"variable1":"1"}
     *
     * @var string[]
     */
    public $variables;
    protected $_name = [
        'areaId'          => 'AreaId',
        'clientToken'     => 'ClientToken',
        'configuration'   => 'Configuration',
        'instances'       => 'Instances',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'templateId'      => 'TemplateId',
        'variables'       => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}
