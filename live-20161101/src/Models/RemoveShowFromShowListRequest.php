<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

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
        'casterId'    => 'CasterId',
        'ownerId'     => 'OwnerId',
        'showId'      => 'ShowId',
        'isBatchMode' => 'isBatchMode',
        'showIdList'  => 'showIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }
        if (null !== $this->isBatchMode) {
            $res['isBatchMode'] = $this->isBatchMode;
        }
        if (null !== $this->showIdList) {
            $res['showIdList'] = $this->showIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveShowFromShowListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }
        if (isset($map['isBatchMode'])) {
            $model->isBatchMode = $map['isBatchMode'];
        }
        if (isset($map['showIdList'])) {
            if (!empty($map['showIdList'])) {
                $model->showIdList = $map['showIdList'];
            }
        }

        return $model;
    }
}
