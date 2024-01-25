<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateStatusOfSceneRequest extends Model
{
    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var int
     */
    public $sceneStatus;
    protected $_name = [
        'operaUid'    => 'OperaUid',
        'sceneId'     => 'SceneId',
        'sceneStatus' => 'SceneStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneStatus) {
            $res['SceneStatus'] = $this->sceneStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStatusOfSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneStatus'])) {
            $model->sceneStatus = $map['SceneStatus'];
        }

        return $model;
    }
}
