<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class BatchBindTemplatesRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $applyAll;

    /**
     * @description This parameter is required.
     *
     * @example 323*****994-cn-qingdao
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example stream
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example true
     *
     * @var bool
     */
    public $replace;

    /**
     * @description This parameter is required.
     *
     * @example 323*****998-cn-qingdao
     *
     * @var string
     */
    public $templateId;

    /**
     * @example timeshift
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'applyAll'     => 'ApplyAll',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'ownerId'      => 'OwnerId',
        'replace'      => 'Replace',
        'templateId'   => 'TemplateId',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyAll) {
            $res['ApplyAll'] = $this->applyAll;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->replace) {
            $res['Replace'] = $this->replace;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchBindTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyAll'])) {
            $model->applyAll = $map['ApplyAll'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Replace'])) {
            $model->replace = $map['Replace'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
