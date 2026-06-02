<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appflow\V20230904\Models\CreateFlowRequest\parameters;
use AlibabaCloud\SDK\Appflow\V20230904\Models\CreateFlowRequest\tag;

class CreateFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowDesc;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $flowTemplate;

    /**
     * @var bool
     */
    public $launchStatus;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'flowDesc' => 'FlowDesc',
        'flowId' => 'FlowId',
        'flowName' => 'FlowName',
        'flowTemplate' => 'FlowTemplate',
        'launchStatus' => 'LaunchStatus',
        'parameters' => 'Parameters',
        'tag' => 'Tag',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowDesc) {
            $res['FlowDesc'] = $this->flowDesc;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->flowTemplate) {
            $res['FlowTemplate'] = $this->flowTemplate;
        }

        if (null !== $this->launchStatus) {
            $res['LaunchStatus'] = $this->launchStatus;
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

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['FlowDesc'])) {
            $model->flowDesc = $map['FlowDesc'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['FlowTemplate'])) {
            $model->flowTemplate = $map['FlowTemplate'];
        }

        if (isset($map['LaunchStatus'])) {
            $model->launchStatus = $map['LaunchStatus'];
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

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
