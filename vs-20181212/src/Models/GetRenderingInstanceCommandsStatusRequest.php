<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetRenderingInstanceCommandsStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cmd-81de027b66e442e99c1e0e09a16a0be5
     *
     * @var string
     */
    public $cmdId;

    /**
     * @description This parameter is required.
     *
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'cmdId' => 'CmdId',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmdId) {
            $res['CmdId'] = $this->cmdId;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRenderingInstanceCommandsStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CmdId'])) {
            $model->cmdId = $map['CmdId'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
