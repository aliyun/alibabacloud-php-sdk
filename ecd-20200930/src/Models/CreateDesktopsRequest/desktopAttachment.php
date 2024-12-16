<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Tea\Model;

class desktopAttachment extends Model
{
    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var string
     */
    public $dataDiskPerLevel;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $defaultLanguage;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var string
     */
    public $systemDiskPerLevel;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'dataDiskCategory'   => 'DataDiskCategory',
        'dataDiskPerLevel'   => 'DataDiskPerLevel',
        'dataDiskSize'       => 'DataDiskSize',
        'defaultLanguage'    => 'DefaultLanguage',
        'desktopType'        => 'DesktopType',
        'imageId'            => 'ImageId',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskPerLevel' => 'SystemDiskPerLevel',
        'systemDiskSize'     => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskPerLevel) {
            $res['DataDiskPerLevel'] = $this->dataDiskPerLevel;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->defaultLanguage) {
            $res['DefaultLanguage'] = $this->defaultLanguage;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskPerLevel) {
            $res['SystemDiskPerLevel'] = $this->systemDiskPerLevel;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopAttachment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskPerLevel'])) {
            $model->dataDiskPerLevel = $map['DataDiskPerLevel'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DefaultLanguage'])) {
            $model->defaultLanguage = $map['DefaultLanguage'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskPerLevel'])) {
            $model->systemDiskPerLevel = $map['SystemDiskPerLevel'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
