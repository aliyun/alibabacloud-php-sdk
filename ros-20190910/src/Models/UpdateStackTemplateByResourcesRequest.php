<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateStackTemplateByResourcesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests.
     *
     * For more information, see [How to ensure idempotence](~~134212~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to only preview the corrected template in this request. Default value: false. Valid values:
     *
     *   true: returns the content of the corrected template and does not correct the template. After Resource Orchestration Service (ROS) compares the corrected template with the original template, ROS determines whether to execute the correction.
     *   false: corrects the template to eliminate drift.
     *
     * >  We recommend that you set the DryRun parameter to true to preview the corrected template. If the template content meets expectations, set the DryRun parameter to false to execute the correction.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example Vpc
     *
     * @var string[]
     */
    public $logicalResourceId;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The format of the returned template. Default value: JSON. Valid values:
     *
     *   JSON
     *   YAML
     *
     * @example JSON
     *
     * @var string
     */
    public $templateFormat;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'dryRun'            => 'DryRun',
        'logicalResourceId' => 'LogicalResourceId',
        'regionId'          => 'RegionId',
        'stackId'           => 'StackId',
        'templateFormat'    => 'TemplateFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->templateFormat) {
            $res['TemplateFormat'] = $this->templateFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStackTemplateByResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['LogicalResourceId'])) {
            if (!empty($map['LogicalResourceId'])) {
                $model->logicalResourceId = $map['LogicalResourceId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['TemplateFormat'])) {
            $model->templateFormat = $map['TemplateFormat'];
        }

        return $model;
    }
}
