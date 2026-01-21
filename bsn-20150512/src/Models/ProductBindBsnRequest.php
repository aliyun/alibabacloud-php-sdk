<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bsn\V20150512\Models;

use AlibabaCloud\Dara\Model;

class ProductBindBsnRequest extends Model
{
    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceType;
    protected $_name = [
        'aliuid' => 'aliuid',
        'num' => 'num',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['aliuid'] = $this->aliuid;
        }

        if (null !== $this->num) {
            $res['num'] = $this->num;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['aliuid'])) {
            $model->aliuid = $map['aliuid'];
        }

        if (isset($map['num'])) {
            $model->num = $map['num'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
