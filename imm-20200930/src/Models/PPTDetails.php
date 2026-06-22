<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class PPTDetails extends Model
{
    /**
     * @var string
     */
    public $imagePath;

    /**
     * @var int
     */
    public $PPTShotIndex;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'imagePath' => 'ImagePath',
        'PPTShotIndex' => 'PPTShotIndex',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imagePath) {
            $res['ImagePath'] = $this->imagePath;
        }

        if (null !== $this->PPTShotIndex) {
            $res['PPTShotIndex'] = $this->PPTShotIndex;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ImagePath'])) {
            $model->imagePath = $map['ImagePath'];
        }

        if (isset($map['PPTShotIndex'])) {
            $model->PPTShotIndex = $map['PPTShotIndex'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
