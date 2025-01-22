<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\resourceSettings;

use AlibabaCloud\Dara\Model;

class realtimeResourceSettings extends Model
{
    /**
     * @var float
     */
    public $requestedCu;
    /**
     * @var string
     */
    public $resourceGroupIdentifier;
    protected $_name = [
        'requestedCu'             => 'RequestedCu',
        'resourceGroupIdentifier' => 'ResourceGroupIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestedCu) {
            $res['RequestedCu'] = $this->requestedCu;
        }

        if (null !== $this->resourceGroupIdentifier) {
            $res['ResourceGroupIdentifier'] = $this->resourceGroupIdentifier;
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
        if (isset($map['RequestedCu'])) {
            $model->requestedCu = $map['RequestedCu'];
        }

        if (isset($map['ResourceGroupIdentifier'])) {
            $model->resourceGroupIdentifier = $map['ResourceGroupIdentifier'];
        }

        return $model;
    }
}
