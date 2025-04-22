<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class LinkRule extends Model
{
    /**
     * @var string
     */
    public $linkType;

    /**
     * @var string
     */
    public $srcDriveId;

    /**
     * @var string
     */
    public $srcDriveName;

    /**
     * @var string
     */
    public $srcFileId;

    /**
     * @var string
     */
    public $srcFileName;

    /**
     * @var bool
     */
    public $srcValid;
    protected $_name = [
        'linkType' => 'link_type',
        'srcDriveId' => 'src_drive_id',
        'srcDriveName' => 'src_drive_name',
        'srcFileId' => 'src_file_id',
        'srcFileName' => 'src_file_name',
        'srcValid' => 'src_valid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->linkType) {
            $res['link_type'] = $this->linkType;
        }

        if (null !== $this->srcDriveId) {
            $res['src_drive_id'] = $this->srcDriveId;
        }

        if (null !== $this->srcDriveName) {
            $res['src_drive_name'] = $this->srcDriveName;
        }

        if (null !== $this->srcFileId) {
            $res['src_file_id'] = $this->srcFileId;
        }

        if (null !== $this->srcFileName) {
            $res['src_file_name'] = $this->srcFileName;
        }

        if (null !== $this->srcValid) {
            $res['src_valid'] = $this->srcValid;
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
        if (isset($map['link_type'])) {
            $model->linkType = $map['link_type'];
        }

        if (isset($map['src_drive_id'])) {
            $model->srcDriveId = $map['src_drive_id'];
        }

        if (isset($map['src_drive_name'])) {
            $model->srcDriveName = $map['src_drive_name'];
        }

        if (isset($map['src_file_id'])) {
            $model->srcFileId = $map['src_file_id'];
        }

        if (isset($map['src_file_name'])) {
            $model->srcFileName = $map['src_file_name'];
        }

        if (isset($map['src_valid'])) {
            $model->srcValid = $map['src_valid'];
        }

        return $model;
    }
}
