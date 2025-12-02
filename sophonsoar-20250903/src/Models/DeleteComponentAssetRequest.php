<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;

class DeleteComponentAssetRequest extends Model
{
    /**
     * @var string
     */
    public $componentAssetUuid;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'componentAssetUuid' => 'ComponentAssetUuid',
        'lang' => 'Lang',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentAssetUuid) {
            $res['ComponentAssetUuid'] = $this->componentAssetUuid;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['ComponentAssetUuid'])) {
            $model->componentAssetUuid = $map['ComponentAssetUuid'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
