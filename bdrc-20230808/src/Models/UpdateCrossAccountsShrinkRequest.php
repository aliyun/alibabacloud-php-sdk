<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class UpdateCrossAccountsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $createTargetsShrink;

    /**
     * @var string
     */
    public $deleteTargetsShrink;
    protected $_name = [
        'createTargetsShrink' => 'CreateTargets',
        'deleteTargetsShrink' => 'DeleteTargets',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTargetsShrink) {
            $res['CreateTargets'] = $this->createTargetsShrink;
        }

        if (null !== $this->deleteTargetsShrink) {
            $res['DeleteTargets'] = $this->deleteTargetsShrink;
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
        if (isset($map['CreateTargets'])) {
            $model->createTargetsShrink = $map['CreateTargets'];
        }

        if (isset($map['DeleteTargets'])) {
            $model->deleteTargetsShrink = $map['DeleteTargets'];
        }

        return $model;
    }
}
