<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyResourcePackageRequest extends Model
{
    /**
     * @var bool
     */
    public $autoQuota;

    /**
     * @var string
     */
    public $resourcePackageId;
    protected $_name = [
        'autoQuota' => 'AutoQuota',
        'resourcePackageId' => 'ResourcePackageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoQuota) {
            $res['AutoQuota'] = $this->autoQuota;
        }

        if (null !== $this->resourcePackageId) {
            $res['ResourcePackageId'] = $this->resourcePackageId;
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
        if (isset($map['AutoQuota'])) {
            $model->autoQuota = $map['AutoQuota'];
        }

        if (isset($map['ResourcePackageId'])) {
            $model->resourcePackageId = $map['ResourcePackageId'];
        }

        return $model;
    }
}
