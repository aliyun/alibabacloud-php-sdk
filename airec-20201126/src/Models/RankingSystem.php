<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\RankingSystem\meta;
use AlibabaCloud\Tea\Model;

class RankingSystem extends Model
{
    /**
     * @example NOT_APPLIED
     *
     * @var string
     */
    public $applyStatus;

    /**
     * @example NOT_DEPLOYED
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @example a-a-a
     *
     * @var string
     */
    public $modelTemplateId;

    /**
     * @example servicea
     *
     * @var string
     */
    public $name;

    /**
     * @var int[]
     */
    public $sceneIdList;
    protected $_name = [
        'applyStatus'     => 'ApplyStatus',
        'deployStatus'    => 'DeployStatus',
        'meta'            => 'Meta',
        'modelTemplateId' => 'ModelTemplateId',
        'name'            => 'Name',
        'sceneIdList'     => 'SceneIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyStatus) {
            $res['ApplyStatus'] = $this->applyStatus;
        }
        if (null !== $this->deployStatus) {
            $res['DeployStatus'] = $this->deployStatus;
        }
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sceneIdList) {
            $res['SceneIdList'] = $this->sceneIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RankingSystem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyStatus'])) {
            $model->applyStatus = $map['ApplyStatus'];
        }
        if (isset($map['DeployStatus'])) {
            $model->deployStatus = $map['DeployStatus'];
        }
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }
        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SceneIdList'])) {
            if (!empty($map['SceneIdList'])) {
                $model->sceneIdList = $map['SceneIdList'];
            }
        }

        return $model;
    }
}
