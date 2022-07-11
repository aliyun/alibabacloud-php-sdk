<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults;
use AlibabaCloud\Tea\Model;

class CreateAutoProvisioningGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @var launchResults
     */
    public $launchResults;

    /**
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
