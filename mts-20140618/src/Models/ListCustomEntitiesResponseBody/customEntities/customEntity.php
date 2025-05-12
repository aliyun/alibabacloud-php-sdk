<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomEntitiesResponseBody\customEntities;

use AlibabaCloud\Dara\Model;

class customEntity extends Model
{
    /**
     * @var string
     */
    public $customEntityId;

    /**
     * @var string
     */
    public $customEntityInfo;

    /**
     * @var string
     */
    public $customEntityName;
    protected $_name = [
        'customEntityId' => 'CustomEntityId',
        'customEntityInfo' => 'CustomEntityInfo',
        'customEntityName' => 'CustomEntityName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customEntityId) {
            $res['CustomEntityId'] = $this->customEntityId;
        }

        if (null !== $this->customEntityInfo) {
            $res['CustomEntityInfo'] = $this->customEntityInfo;
        }

        if (null !== $this->customEntityName) {
            $res['CustomEntityName'] = $this->customEntityName;
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
        if (isset($map['CustomEntityId'])) {
            $model->customEntityId = $map['CustomEntityId'];
        }

        if (isset($map['CustomEntityInfo'])) {
            $model->customEntityInfo = $map['CustomEntityInfo'];
        }

        if (isset($map['CustomEntityName'])) {
            $model->customEntityName = $map['CustomEntityName'];
        }

        return $model;
    }
}
