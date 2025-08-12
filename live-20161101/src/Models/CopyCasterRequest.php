<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class CopyCasterRequest extends Model
{
    /**
     * @var string
     */
    public $casterName;

    /**
     * @var string
     */
    public $clientToken;

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
    public $srcCasterId;
    protected $_name = [
        'casterName' => 'CasterName',
        'clientToken' => 'ClientToken',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'srcCasterId' => 'SrcCasterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->srcCasterId) {
            $res['SrcCasterId'] = $this->srcCasterId;
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
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SrcCasterId'])) {
            $model->srcCasterId = $map['SrcCasterId'];
        }

        return $model;
    }
}
