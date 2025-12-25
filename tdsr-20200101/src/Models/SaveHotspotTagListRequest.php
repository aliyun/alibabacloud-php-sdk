<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;

class SaveHotspotTagListRequest extends Model
{
    /**
     * @var string
     */
    public $hotspotListJson;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'hotspotListJson' => 'HotspotListJson',
        'sceneId' => 'SceneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotspotListJson) {
            $res['HotspotListJson'] = $this->hotspotListJson;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
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
        if (isset($map['HotspotListJson'])) {
            $model->hotspotListJson = $map['HotspotListJson'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
