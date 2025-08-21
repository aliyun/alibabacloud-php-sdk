<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectInstancesResponseBody\renderingInstances\stateInfo;

class renderingInstances extends Model
{
    /**
     * @var string
     */
    public $associationTime;

    /**
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

    public function validate()
    {
        if (null !== $this->stateInfo) {
            $this->stateInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associationTime) {
            $res['AssociationTime'] = $this->associationTime;
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        if (null !== $this->stateInfo) {
            $res['StateInfo'] = null !== $this->stateInfo ? $this->stateInfo->toArray($noStream) : $this->stateInfo;
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
