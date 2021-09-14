<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class ResizeDbfsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $fsId;

    /**
     * @var int
     */
    public $newSizeG;
    protected $_name = [
        'regionId' => 'RegionId',
        'fsId'     => 'FsId',
        'newSizeG' => 'NewSizeG',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->newSizeG) {
            $res['NewSizeG'] = $this->newSizeG;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['NewSizeG'])) {
            $model->newSizeG = $map['NewSizeG'];
        }

        return $model;
    }
}
