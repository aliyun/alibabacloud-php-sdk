<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectInstancesResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectInstancesResponseBody\renderingInstances\stateInfo;
use AlibabaCloud\Tea\Model;

class renderingInstances extends Model
{
    /**
     * @example 2024-09-11T18:19:04+08:00
     *
     * @var string
     */
    public $associationTime;

    /**
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var stateInfo
     */
    public $stateInfo;
    protected $_name = [
        'associationTime' => 'AssociationTime',
        'renderingInstanceId' => 'RenderingInstanceId',
        'stateInfo' => 'StateInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationTime) {
            $res['AssociationTime'] = $this->associationTime;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }
        if (null !== $this->stateInfo) {
            $res['StateInfo'] = null !== $this->stateInfo ? $this->stateInfo->toMap() : null;
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
        if (isset($map['AssociationTime'])) {
            $model->associationTime = $map['AssociationTime'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['StateInfo'])) {
            $model->stateInfo = stateInfo::fromMap($map['StateInfo']);
        }

        return $model;
    }
}
