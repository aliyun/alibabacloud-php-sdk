<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DeleteSwimLaneRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $swimLaneName;
    protected $_name = [
        'serviceMeshId' => 'ServiceMeshId',
        'swimLaneName'  => 'SwimLaneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->swimLaneName) {
            $res['SwimLaneName'] = $this->swimLaneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSwimLaneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['SwimLaneName'])) {
            $model->swimLaneName = $map['SwimLaneName'];
        }

        return $model;
    }
}
