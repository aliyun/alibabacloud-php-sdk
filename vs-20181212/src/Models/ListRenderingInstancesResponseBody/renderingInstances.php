<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class renderingInstances extends Model
{
    /**
     * @example 2023-11-17T02:18:04Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @example crs.cp.l1
     *
     * @var string
     */
    public $renderingSpec;
    protected $_name = [
        'creationTime'        => 'CreationTime',
        'renderingInstanceId' => 'RenderingInstanceId',
        'renderingSpec'       => 'RenderingSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }
        if (null !== $this->renderingSpec) {
            $res['RenderingSpec'] = $this->renderingSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return renderingInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['RenderingSpec'])) {
            $model->renderingSpec = $map['RenderingSpec'];
        }

        return $model;
    }
}
