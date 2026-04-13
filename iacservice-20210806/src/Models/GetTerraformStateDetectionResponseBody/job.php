<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponseBody\job\changedResources;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponseBody\job\driftedResources;

class job extends Model
{
    /**
     * @var changedResources[]
     */
    public $changedResources;

    /**
     * @var driftedResources[]
     */
    public $driftedResources;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'changedResources' => 'changedResources',
        'driftedResources' => 'driftedResources',
        'errorMessage' => 'errorMessage',
        'identifier' => 'identifier',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->changedResources)) {
            Model::validateArray($this->changedResources);
        }
        if (\is_array($this->driftedResources)) {
            Model::validateArray($this->driftedResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changedResources) {
            if (\is_array($this->changedResources)) {
                $res['changedResources'] = [];
                $n1 = 0;
                foreach ($this->changedResources as $item1) {
                    $res['changedResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->driftedResources) {
            if (\is_array($this->driftedResources)) {
                $res['driftedResources'] = [];
                $n1 = 0;
                foreach ($this->driftedResources as $item1) {
                    $res['driftedResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['changedResources'])) {
            if (!empty($map['changedResources'])) {
                $model->changedResources = [];
                $n1 = 0;
                foreach ($map['changedResources'] as $item1) {
                    $model->changedResources[$n1] = changedResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['driftedResources'])) {
            if (!empty($map['driftedResources'])) {
                $model->driftedResources = [];
                $n1 = 0;
                foreach ($map['driftedResources'] as $item1) {
                    $model->driftedResources[$n1] = driftedResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
