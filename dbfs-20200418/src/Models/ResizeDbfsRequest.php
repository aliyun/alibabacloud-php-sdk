<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class ResizeDbfsRequest extends Model
{
    /**
     * @var string
     */
    public $fsId;

    /**
     * @var int
     */
    public $newSizeG;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fsId'     => 'FsId',
        'newSizeG' => 'NewSizeG',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->newSizeG) {
            $res['NewSizeG'] = $this->newSizeG;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['NewSizeG'])) {
            $model->newSizeG = $map['NewSizeG'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
