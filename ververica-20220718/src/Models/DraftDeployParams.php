<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class DraftDeployParams extends Model
{
    /**
     * @var string
     */
    public $deploymentDraftId;

    /**
     * @var BriefDeploymentTarget
     */
    public $deploymentTarget;

    /**
     * @example false
     *
     * @var bool
     */
    public $skipValidate;
    protected $_name = [
        'deploymentDraftId' => 'deploymentDraftId',
        'deploymentTarget'  => 'deploymentTarget',
        'skipValidate'      => 'skipValidate',
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
        if (null !== $this->deploymentTarget) {
            $res['deploymentTarget'] = null !== $this->deploymentTarget ? $this->deploymentTarget->toMap() : null;
        }
        if (null !== $this->skipValidate) {
            $res['skipValidate'] = $this->skipValidate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DraftDeployParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deploymentDraftId'])) {
            $model->deploymentDraftId = $map['deploymentDraftId'];
        }
        if (isset($map['deploymentTarget'])) {
            $model->deploymentTarget = BriefDeploymentTarget::fromMap($map['deploymentTarget']);
        }
        if (isset($map['skipValidate'])) {
            $model->skipValidate = $map['skipValidate'];
        }

        return $model;
    }
}
