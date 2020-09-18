<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $flowDescription;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $flowSource;
    protected $_name = [
        'flowName'        => 'FlowName',
        'flowDescription' => 'FlowDescription',
        'definition'      => 'Definition',
        'templateId'      => 'TemplateId',
        'flowSource'      => 'FlowSource',
    ];

    public function validate()
    {
        Model::validateRequired('flowName', $this->flowName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowDescription) {
            $res['FlowDescription'] = $this->flowDescription;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->flowSource) {
            $res['FlowSource'] = $this->flowSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowDescription'])) {
            $model->flowDescription = $map['FlowDescription'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['FlowSource'])) {
            $model->flowSource = $map['FlowSource'];
        }

        return $model;
    }
}
