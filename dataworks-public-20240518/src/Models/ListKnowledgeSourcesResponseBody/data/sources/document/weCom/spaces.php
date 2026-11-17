<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeSourcesResponseBody\data\sources\document\weCom;

use AlibabaCloud\Dara\Model;

class spaces extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $spaceName;
    protected $_name = [
        'spaceId' => 'SpaceId',
        'spaceName' => 'SpaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->spaceName) {
            $res['SpaceName'] = $this->spaceName;
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
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        if (isset($map['SpaceName'])) {
            $model->spaceName = $map['SpaceName'];
        }

        return $model;
    }
}
