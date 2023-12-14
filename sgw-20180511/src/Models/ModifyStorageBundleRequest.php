<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ModifyStorageBundleRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example alex-123***
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example sb-000ibk4xrlr03qrjr***
     *
     * @var string
     */
    public $storageBundleId;
    protected $_name = [
        'description'     => 'Description',
        'name'            => 'Name',
        'securityToken'   => 'SecurityToken',
        'storageBundleId' => 'StorageBundleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->storageBundleId) {
            $res['StorageBundleId'] = $this->storageBundleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStorageBundleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StorageBundleId'])) {
            $model->storageBundleId = $map['StorageBundleId'];
        }

        return $model;
    }
}
