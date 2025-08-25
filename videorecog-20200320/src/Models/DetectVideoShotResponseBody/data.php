<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int[]
     */
    public $shotFrameIds;
    protected $_name = [
        'shotFrameIds' => 'ShotFrameIds',
    ];

    public function validate()
    {
        if (\is_array($this->shotFrameIds)) {
            Model::validateArray($this->shotFrameIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shotFrameIds) {
            if (\is_array($this->shotFrameIds)) {
                $res['ShotFrameIds'] = [];
                $n1 = 0;
                foreach ($this->shotFrameIds as $item1) {
                    $res['ShotFrameIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ShotFrameIds'])) {
            if (!empty($map['ShotFrameIds'])) {
                $model->shotFrameIds = [];
                $n1 = 0;
                foreach ($map['ShotFrameIds'] as $item1) {
                    $model->shotFrameIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
