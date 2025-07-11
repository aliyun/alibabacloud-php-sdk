<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DisassociateRenderingProjectInstancesShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example project-422bc38dfgh5eb44149f135ef76304f63b
     *
     * @var string
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $renderingInstanceIdsShrink;
    protected $_name = [
        'projectId' => 'ProjectId',
        'renderingInstanceIdsShrink' => 'RenderingInstanceIds',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DisassociateRenderingProjectInstancesShrinkRequest
     */
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
