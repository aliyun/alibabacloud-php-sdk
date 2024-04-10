<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults;
use AlibabaCloud\Tea\Model;

class CreateAutoProvisioningGroupResponseBody extends Model
{
    /**
     * @description The ID of the auto provisioning group.
     *
     * @example apg-sn54avj8htgvtyh8****
     *
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @description The instances created by the auto provisioning group. The values of the parameters in this array are returned only when AutoProvisioningGroupType is set to `instant`.
     *
     * @var launchResults
     */
    public $launchResults;

    /**
     * @description The ID of the request.
     *
     * @example 745CEC9F-0DD7-4451-9FE7-8B752F39****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoProvisioningGroupId' => 'AutoProvisioningGroupId',
        'launchResults'           => 'LaunchResults',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }
        if (null !== $this->launchResults) {
            $res['LaunchResults'] = null !== $this->launchResults ? $this->launchResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoProvisioningGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
        }
        if (isset($map['LaunchResults'])) {
            $model->launchResults = launchResults::fromMap($map['LaunchResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
