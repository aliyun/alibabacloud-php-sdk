<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateMultiAccountDeliveryChannelRequest;

use AlibabaCloud\Dara\Model;

class deliveryChannelFilter extends Model
{
    /**
     * @var string[]
     */
    public $accountScopes;

    /**
     * @var string[]
     */
    public $resourceTypes;
    protected $_name = [
        'accountScopes' => 'AccountScopes',
        'resourceTypes' => 'ResourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->accountScopes)) {
            Model::validateArray($this->accountScopes);
        }
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountScopes) {
            if (\is_array($this->accountScopes)) {
                $res['AccountScopes'] = [];
                $n1 = 0;
                foreach ($this->accountScopes as $item1) {
                    $res['AccountScopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['ResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['ResourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccountScopes'])) {
            if (!empty($map['AccountScopes'])) {
                $model->accountScopes = [];
                $n1 = 0;
                foreach ($map['AccountScopes'] as $item1) {
                    $model->accountScopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $n1 = 0;
                foreach ($map['ResourceTypes'] as $item1) {
                    $model->resourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
