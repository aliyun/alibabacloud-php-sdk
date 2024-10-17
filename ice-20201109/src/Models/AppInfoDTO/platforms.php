<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AppInfoDTO;

use AlibabaCloud\Tea\Model;

class platforms extends Model
{
    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string[]
     */
    public $licenseItemIds;

    /**
     * @var string
     */
    public $pkgName;

    /**
     * @var string
     */
    public $pkgSignature;

    /**
     * @var int
     */
    public $platformType;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'itemId'         => 'ItemId',
        'licenseItemIds' => 'LicenseItemIds',
        'pkgName'        => 'PkgName',
        'pkgSignature'   => 'PkgSignature',
        'platformType'   => 'PlatformType',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->licenseItemIds) {
            $res['LicenseItemIds'] = $this->licenseItemIds;
        }
        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }
        if (null !== $this->pkgSignature) {
            $res['PkgSignature'] = $this->pkgSignature;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return platforms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LicenseItemIds'])) {
            if (!empty($map['LicenseItemIds'])) {
                $model->licenseItemIds = $map['LicenseItemIds'];
            }
        }
        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }
        if (isset($map['PkgSignature'])) {
            $model->pkgSignature = $map['PkgSignature'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
