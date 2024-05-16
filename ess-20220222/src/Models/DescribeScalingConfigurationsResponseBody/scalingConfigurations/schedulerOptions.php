<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Tea\Model;

class schedulerOptions extends Model
{
    /**
     * @description >  This parameter is in invitational preview and is not available for use.
     *
     * @example testManagedPrivateSpaceId
     *
     * @var string
     */
    public $managedPrivateSpaceId;
    protected $_name = [
        'managedPrivateSpaceId' => 'ManagedPrivateSpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedPrivateSpaceId) {
            $res['ManagedPrivateSpaceId'] = $this->managedPrivateSpaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulerOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedPrivateSpaceId'])) {
            $model->managedPrivateSpaceId = $map['ManagedPrivateSpaceId'];
        }

        return $model;
    }
}
