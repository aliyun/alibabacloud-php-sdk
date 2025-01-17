<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplateByScratchResponseBody;

use AlibabaCloud\Dara\Model;

class resourcesToImport extends Model
{
    /**
     * @var string
     */
    public $logicalResourceId;
    /**
     * @var mixed[]
     */
    public $resourceIdentifier;
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'logicalResourceId'  => 'LogicalResourceId',
        'resourceIdentifier' => 'ResourceIdentifier',
        'resourceType'       => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->resourceIdentifier)) {
            Model::validateArray($this->resourceIdentifier);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }

        if (null !== $this->resourceIdentifier) {
            if (\is_array($this->resourceIdentifier)) {
                $res['ResourceIdentifier'] = [];
                foreach ($this->resourceIdentifier as $key1 => $value1) {
                    $res['ResourceIdentifier'][$key1] = $value1;
                }
            }
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
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }

        if (isset($map['ResourceIdentifier'])) {
            if (!empty($map['ResourceIdentifier'])) {
                $model->resourceIdentifier = [];
                foreach ($map['ResourceIdentifier'] as $key1 => $value1) {
                    $model->resourceIdentifier[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
