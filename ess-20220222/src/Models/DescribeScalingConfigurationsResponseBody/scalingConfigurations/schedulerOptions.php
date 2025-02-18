<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Dara\Model;

class schedulerOptions extends Model
{
    /**
     * @var string
     */
    public $managedPrivateSpaceId;
    protected $_name = [
        'managedPrivateSpaceId' => 'ManagedPrivateSpaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->managedPrivateSpaceId) {
            $res['ManagedPrivateSpaceId'] = $this->managedPrivateSpaceId;
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
        if (isset($map['ManagedPrivateSpaceId'])) {
            $model->managedPrivateSpaceId = $map['ManagedPrivateSpaceId'];
        }

        return $model;
    }
}
