<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policyFunctions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policyFunctions\actionPolicyFunctions\functions;

class actionPolicyFunctions extends Model
{
    /**
     * @var functions[]
     */
    public $functions;

    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'functions' => 'Functions',
        'logicalResourceId' => 'LogicalResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->functions)) {
            Model::validateArray($this->functions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functions) {
            if (\is_array($this->functions)) {
                $res['Functions'] = [];
                $n1 = 0;
                foreach ($this->functions as $item1) {
                    $res['Functions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['Functions'])) {
            if (!empty($map['Functions'])) {
                $model->functions = [];
                $n1 = 0;
                foreach ($map['Functions'] as $item1) {
                    $model->functions[$n1] = functions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
