<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpgradeVersionByUuidsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0.0.9
     *
     * @var string
     */
    public $upgradeVersion;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'upgradeVersion' => 'UpgradeVersion',
        'uuidList'       => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->upgradeVersion) {
            $res['UpgradeVersion'] = $this->upgradeVersion;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeVersionByUuidsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpgradeVersion'])) {
            $model->upgradeVersion = $map['UpgradeVersion'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
