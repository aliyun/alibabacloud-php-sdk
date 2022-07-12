<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteDirectoriesRequest extends Model
{
    /**
     * @var string[]
     */
    public $directoryId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDirectoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            if (!empty($map['DirectoryId'])) {
                $model->directoryId = $map['DirectoryId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
