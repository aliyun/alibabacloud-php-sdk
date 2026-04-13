<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponseBody\job;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponseBody\job\driftedResources\attributeDrifts;

class driftedResources extends Model
{
    /**
     * @var attributeDrifts[]
     */
    public $attributeDrifts;

    /**
     * @var string
     */
    public $driftedType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceIdentifier;
    protected $_name = [
        'attributeDrifts' => 'attributeDrifts',
        'driftedType' => 'driftedType',
        'resourceId' => 'resourceId',
        'resourceIdentifier' => 'resourceIdentifier',
    ];

    public function validate()
    {
        if (\is_array($this->attributeDrifts)) {
            Model::validateArray($this->attributeDrifts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeDrifts) {
            if (\is_array($this->attributeDrifts)) {
                $res['attributeDrifts'] = [];
                $n1 = 0;
                foreach ($this->attributeDrifts as $item1) {
                    $res['attributeDrifts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->driftedType) {
            $res['driftedType'] = $this->driftedType;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceIdentifier) {
            $res['resourceIdentifier'] = $this->resourceIdentifier;
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
        if (isset($map['attributeDrifts'])) {
            if (!empty($map['attributeDrifts'])) {
                $model->attributeDrifts = [];
                $n1 = 0;
                foreach ($map['attributeDrifts'] as $item1) {
                    $model->attributeDrifts[$n1] = attributeDrifts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['driftedType'])) {
            $model->driftedType = $map['driftedType'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resourceIdentifier'])) {
            $model->resourceIdentifier = $map['resourceIdentifier'];
        }

        return $model;
    }
}
