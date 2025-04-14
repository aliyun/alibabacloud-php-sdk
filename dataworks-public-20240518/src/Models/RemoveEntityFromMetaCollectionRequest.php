<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RemoveEntityFromMetaCollectionRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $metaCollectionId;
    protected $_name = [
        'id' => 'Id',
        'metaCollectionId' => 'MetaCollectionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->metaCollectionId) {
            $res['MetaCollectionId'] = $this->metaCollectionId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MetaCollectionId'])) {
            $model->metaCollectionId = $map['MetaCollectionId'];
        }

        return $model;
    }
}
