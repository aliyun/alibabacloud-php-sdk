<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CopyCdsFileRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRename;

    /**
     * @example cn-hangzhou+cds-352282****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 640985a0ca2f71f489d2497682ca0bf468de****
     *
     * @var string
     */
    public $fileId;

    /**
     * @example root
     *
     * @var string
     */
    public $parentFolderId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoRename'     => 'AutoRename',
        'cdsId'          => 'CdsId',
        'endUserId'      => 'EndUserId',
        'fileId'         => 'FileId',
        'parentFolderId' => 'ParentFolderId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRename) {
            $res['AutoRename'] = $this->autoRename;
        }
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyCdsFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRename'])) {
            $model->autoRename = $map['AutoRename'];
        }
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
