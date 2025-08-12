<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterProgramRequest\episode;

class ModifyCasterProgramRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var episode[]
     */
    public $episode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'casterId' => 'CasterId',
        'episode' => 'Episode',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->episode)) {
            Model::validateArray($this->episode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->episode) {
            if (\is_array($this->episode)) {
                $res['Episode'] = [];
                $n1 = 0;
                foreach ($this->episode as $item1) {
                    $res['Episode'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['Episode'])) {
            if (!empty($map['Episode'])) {
                $model->episode = [];
                $n1 = 0;
                foreach ($map['Episode'] as $item1) {
                    $model->episode[$n1] = episode::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
