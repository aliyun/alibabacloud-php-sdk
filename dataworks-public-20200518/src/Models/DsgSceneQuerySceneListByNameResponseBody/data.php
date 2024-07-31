<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneQuerySceneListByNameResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneQuerySceneListByNameResponseBody\data\projects;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about multiple levels of data masking scenarios.
     *
     * @var mixed[]
     */
    public $children;

    /**
     * @description The description of the data masking scenario.
     *
     * @var string
     */
    public $desc;

    /**
     * @description The ID of the data masking scenario.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The information about the compute engine for which the data masking scenario takes effect.
     *
     * @var projects[]
     */
    public $projects;

    /**
     * @description The code of the level-1 data masking scenario. Valid values:
     *
     *   dataworks_display_desense_code: masking of displayed data in DataStudio and Data Map
     *   maxcompute_desense_code: data masking at the MaxCompute compute engine layer
     *   maxcompute_new_desense_code: data masking at the MaxCompute compute engine layer (new)
     *   hologres_display_desense_code: data masking at the Hologres compute engine layer
     *   dataworks_data_integration_desense_code: static data masking in Data Integration
     *   dataworks_analysis_desense_code: masking of displayed data in DataAnalysis
     *
     * @example dataworks_display_desense_code
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description The level of the data masking scenario. Valid values:
     *
     *   0: level-1 data masking scenario
     *   1: level-2 data masking scenario
     *
     * @example 1
     *
     * @var int
     */
    public $sceneLevel;

    /**
     * @description The name of the data masking scenario.
     *
     * @example test_scene
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description The list of user groups in the data masking scenario. Separate user groups with commas (,).
     *
     * @example user1,user2
     *
     * @var string
     */
    public $userGroups;
    protected $_name = [
        'children'   => 'Children',
        'desc'       => 'Desc',
        'id'         => 'Id',
        'projects'   => 'Projects',
        'sceneCode'  => 'SceneCode',
        'sceneLevel' => 'SceneLevel',
        'sceneName'  => 'SceneName',
        'userGroups' => 'UserGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = $this->children;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projects) {
            $res['Projects'] = [];
            if (null !== $this->projects && \is_array($this->projects)) {
                $n = 0;
                foreach ($this->projects as $item) {
                    $res['Projects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->sceneLevel) {
            $res['SceneLevel'] = $this->sceneLevel;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->userGroups) {
            $res['UserGroups'] = $this->userGroups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = $map['Children'];
            }
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n               = 0;
                foreach ($map['Projects'] as $item) {
                    $model->projects[$n++] = null !== $item ? projects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['SceneLevel'])) {
            $model->sceneLevel = $map['SceneLevel'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['UserGroups'])) {
            $model->userGroups = $map['UserGroups'];
        }

        return $model;
    }
}
