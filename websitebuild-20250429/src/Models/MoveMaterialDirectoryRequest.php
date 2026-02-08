<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class MoveMaterialDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @var int
     */
    public $sortNum;
    protected $_name = [
        'bizId' => 'BizId',
        'directoryId' => 'DirectoryId',
        'parentDirectoryId' => 'ParentDirectoryId',
        'sortNum' => 'SortNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->parentDirectoryId) {
            $res['ParentDirectoryId'] = $this->parentDirectoryId;
        }

        if (null !== $this->sortNum) {
            $res['SortNum'] = $this->sortNum;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['ParentDirectoryId'])) {
            $model->parentDirectoryId = $map['ParentDirectoryId'];
        }

        if (isset($map['SortNum'])) {
            $model->sortNum = $map['SortNum'];
        }

        return $model;
    }
}
