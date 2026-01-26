<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class DescribeFilesystemsAssociatedHpnZonesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $filesystemsShrink;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'filesystemsShrink' => 'Filesystems',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filesystemsShrink) {
            $res['Filesystems'] = $this->filesystemsShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Filesystems'])) {
            $model->filesystemsShrink = $map['Filesystems'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
