<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class RemoveShowFromShowListRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $showId;

    /**
     * @var bool
     */
    public $isBatchMode;

    /**
     * @var string[]
     */
    public $showIdList;
    protected $_name = [
        'casterId' => 'CasterId',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'showId' => 'ShowId',
        'isBatchMode' => 'isBatchMode',
        'showIdList' => 'showIdList',
    ];

    public function validate()
    {
        if (\is_array($this->showIdList)) {
            Model::validateArray($this->showIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }

        if (null !== $this->isBatchMode) {
            $res['isBatchMode'] = $this->isBatchMode;
        }

        if (null !== $this->showIdList) {
            if (\is_array($this->showIdList)) {
                $res['showIdList'] = [];
                $n1 = 0;
                foreach ($this->showIdList as $item1) {
                    $res['showIdList'][$n1] = $item1;
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }

        if (isset($map['isBatchMode'])) {
            $model->isBatchMode = $map['isBatchMode'];
        }

        if (isset($map['showIdList'])) {
            if (!empty($map['showIdList'])) {
                $model->showIdList = [];
                $n1 = 0;
                foreach ($map['showIdList'] as $item1) {
                    $model->showIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
