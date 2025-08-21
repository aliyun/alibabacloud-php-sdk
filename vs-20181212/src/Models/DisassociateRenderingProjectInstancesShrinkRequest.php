<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DisassociateRenderingProjectInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $renderingInstanceIdsShrink;
    protected $_name = [
        'projectId' => 'ProjectId',
        'renderingInstanceIdsShrink' => 'RenderingInstanceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->renderingInstanceIdsShrink) {
            $res['RenderingInstanceIds'] = $this->renderingInstanceIdsShrink;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RenderingInstanceIds'])) {
            $model->renderingInstanceIdsShrink = $map['RenderingInstanceIds'];
        }

        return $model;
    }
}
