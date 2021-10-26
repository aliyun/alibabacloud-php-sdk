<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SynchronizeGroupConfigFlowStartRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $modifyPolicy;

    /**
     * @var string
     */
    public $vpcName;

    /**
     * @var string
     */
    public $vpcSchema;

    /**
     * @var string[]
     */
    public $include;

    /**
     * @var string[]
     */
    public $exclude;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'flowId'        => 'FlowId',
        'modifyPolicy'  => 'ModifyPolicy',
        'vpcName'       => 'VpcName',
        'vpcSchema'     => 'VpcSchema',
        'include'       => 'Include',
        'exclude'       => 'Exclude',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->modifyPolicy) {
            $res['ModifyPolicy'] = $this->modifyPolicy;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->vpcSchema) {
            $res['VpcSchema'] = $this->vpcSchema;
        }
        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SynchronizeGroupConfigFlowStartRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['ModifyPolicy'])) {
            $model->modifyPolicy = $map['ModifyPolicy'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['VpcSchema'])) {
            $model->vpcSchema = $map['VpcSchema'];
        }
        if (isset($map['Include'])) {
            if (!empty($map['Include'])) {
                $model->include = $map['Include'];
            }
        }
        if (isset($map['Exclude'])) {
            if (!empty($map['Exclude'])) {
                $model->exclude = $map['Exclude'];
            }
        }

        return $model;
    }
}
