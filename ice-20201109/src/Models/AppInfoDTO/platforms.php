<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AppInfoDTO;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->licenseItemIds)) {
            Model::validateArray($this->licenseItemIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->licenseItemIds) {
            if (\is_array($this->licenseItemIds)) {
                $res['LicenseItemIds'] = [];
                $n1                    = 0;
                foreach ($this->licenseItemIds as $item1) {
                    $res['LicenseItemIds'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['LicenseItemIds'])) {
            if (!empty($map['LicenseItemIds'])) {
                $model->licenseItemIds = [];
                $n1                    = 0;
                foreach ($map['LicenseItemIds'] as $item1) {
                    $model->licenseItemIds[$n1++] = $item1;
                }
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
