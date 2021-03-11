<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class BindTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $applyAll;

    /**
     * @var bool
     */
    public $replace;
    protected $_name = [
        'ownerId'      => 'OwnerId',
        'showLog'      => 'ShowLog',
        'templateId'   => 'TemplateId',
        'templateType' => 'TemplateType',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'applyAll'     => 'ApplyAll',
        'replace'      => 'Replace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->applyAll) {
            $res['ApplyAll'] = $this->applyAll;
        }
        if (null !== $this->replace) {
            $res['Replace'] = $this->replace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ApplyAll'])) {
            $model->applyAll = $map['ApplyAll'];
        }
        if (isset($map['Replace'])) {
            $model->replace = $map['Replace'];
        }

        return $model;
    }
}
