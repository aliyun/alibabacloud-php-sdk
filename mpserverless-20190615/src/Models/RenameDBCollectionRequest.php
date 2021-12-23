<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class RenameDBCollectionRequest extends Model
{
    /**
     * @var string
     */
    public $newCollection;

    /**
     * @var string
     */
    public $originCollection;

    /**
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'newCollection'    => 'NewCollection',
        'originCollection' => 'OriginCollection',
        'spaceId'          => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newCollection) {
            $res['NewCollection'] = $this->newCollection;
        }
        if (null !== $this->originCollection) {
            $res['OriginCollection'] = $this->originCollection;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenameDBCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewCollection'])) {
            $model->newCollection = $map['NewCollection'];
        }
        if (isset($map['OriginCollection'])) {
            $model->originCollection = $map['OriginCollection'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
