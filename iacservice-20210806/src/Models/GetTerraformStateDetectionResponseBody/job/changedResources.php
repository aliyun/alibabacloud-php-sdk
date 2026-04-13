<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponseBody\job;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponseBody\job\changedResources\attributeChanges;

class changedResources extends Model
{
    /**
     * @var attributeChanges[]
     */
    public $attributeChanges;

    /**
     * @var string
     */
    public $changedType;

    /**
     * @var bool
     */
    public $hasDrift;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceIdentifier;
    protected $_name = [
        'attributeChanges' => 'attributeChanges',
        'changedType' => 'changedType',
        'hasDrift' => 'hasDrift',
        'resourceId' => 'resourceId',
        'resourceIdentifier' => 'resourceIdentifier',
    ];

    public function validate()
    {
        if (\is_array($this->attributeChanges)) {
            Model::validateArray($this->attributeChanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeChanges) {
            if (\is_array($this->attributeChanges)) {
                $res['attributeChanges'] = [];
                $n1 = 0;
                foreach ($this->attributeChanges as $item1) {
                    $res['attributeChanges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changedType) {
            $res['changedType'] = $this->changedType;
        }

        if (null !== $this->hasDrift) {
            $res['hasDrift'] = $this->hasDrift;
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
        if (isset($map['attributeChanges'])) {
            if (!empty($map['attributeChanges'])) {
                $model->attributeChanges = [];
                $n1 = 0;
                foreach ($map['attributeChanges'] as $item1) {
                    $model->attributeChanges[$n1] = attributeChanges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['changedType'])) {
            $model->changedType = $map['changedType'];
        }

        if (isset($map['hasDrift'])) {
            $model->hasDrift = $map['hasDrift'];
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
