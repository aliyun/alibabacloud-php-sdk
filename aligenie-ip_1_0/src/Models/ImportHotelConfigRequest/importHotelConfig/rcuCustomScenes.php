<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigRequest\importHotelConfig;

use AlibabaCloud\Tea\Model;

class rcuCustomScenes extends Model
{
    /**
     * @var string[]
     */
    public $corpusList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'corpusList'  => 'CorpusList',
        'description' => 'Description',
        'icon'        => 'Icon',
        'name'        => 'Name',
        'sceneId'     => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpusList) {
            $res['CorpusList'] = $this->corpusList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rcuCustomScenes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpusList'])) {
            if (!empty($map['CorpusList'])) {
                $model->corpusList = $map['CorpusList'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
