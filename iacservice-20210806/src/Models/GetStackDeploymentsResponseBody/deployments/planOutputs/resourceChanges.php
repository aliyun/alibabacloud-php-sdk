<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments\planOutputs;

use AlibabaCloud\Dara\Model;

class resourceChanges extends Model
{
    /**
     * @var string
     */
    public $change;

    /**
     * @var string[]
     */
    public $resourceActions;

    /**
     * @var string
     */
    public $resourceIdentifier;
    protected $_name = [
        'change' => 'change',
        'resourceActions' => 'resourceActions',
        'resourceIdentifier' => 'resourceIdentifier',
    ];

    public function validate()
    {
        if (\is_array($this->resourceActions)) {
            Model::validateArray($this->resourceActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->change) {
            $res['change'] = $this->change;
        }

        if (null !== $this->resourceActions) {
            if (\is_array($this->resourceActions)) {
                $res['resourceActions'] = [];
                $n1 = 0;
                foreach ($this->resourceActions as $item1) {
                    $res['resourceActions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['change'])) {
            $model->change = $map['change'];
        }

        if (isset($map['resourceActions'])) {
            if (!empty($map['resourceActions'])) {
                $model->resourceActions = [];
                $n1 = 0;
                foreach ($map['resourceActions'] as $item1) {
                    $model->resourceActions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceIdentifier'])) {
            $model->resourceIdentifier = $map['resourceIdentifier'];
        }

        return $model;
    }
}
