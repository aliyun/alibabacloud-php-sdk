<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class PreloadVodObjectCachesRequest extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var bool
     */
    public $l2Preload;

    /**
     * @var string
     */
    public $objectPath;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $withHeader;
    protected $_name = [
        'area' => 'Area',
        'l2Preload' => 'L2Preload',
        'objectPath' => 'ObjectPath',
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'withHeader' => 'WithHeader',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }

        if (null !== $this->l2Preload) {
            $res['L2Preload'] = $this->l2Preload;
        }

        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->withHeader) {
            $res['WithHeader'] = $this->withHeader;
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
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }

        if (isset($map['L2Preload'])) {
            $model->l2Preload = $map['L2Preload'];
        }

        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['WithHeader'])) {
            $model->withHeader = $map['WithHeader'];
        }

        return $model;
    }
}
