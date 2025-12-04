<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class DraftValidateParams extends Model
{
    /**
     * @var string
     */
    public $deploymentDraftId;

    /**
     * @var string
     */
    public $deploymentTargetName;
    protected $_name = [
        'deploymentDraftId' => 'deploymentDraftId',
        'deploymentTargetName' => 'deploymentTargetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentDraftId) {
            $res['deploymentDraftId'] = $this->deploymentDraftId;
        }

        if (null !== $this->deploymentTargetName) {
            $res['deploymentTargetName'] = $this->deploymentTargetName;
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
        if (isset($map['deploymentDraftId'])) {
            $model->deploymentDraftId = $map['deploymentDraftId'];
        }

        if (isset($map['deploymentTargetName'])) {
            $model->deploymentTargetName = $map['deploymentTargetName'];
        }

        return $model;
    }
}
