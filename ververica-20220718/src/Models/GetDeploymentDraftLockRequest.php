<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class GetDeploymentDraftLockRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example c84d73be-40ad-4627-8bdd-fa1eba51b234
     *
     * @var string
     */
    public $deploymentDraftId;
    protected $_name = [
        'deploymentDraftId' => 'deploymentDraftId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentDraftId) {
            $res['deploymentDraftId'] = $this->deploymentDraftId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeploymentDraftLockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deploymentDraftId'])) {
            $model->deploymentDraftId = $map['deploymentDraftId'];
        }

        return $model;
    }
}
