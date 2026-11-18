<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ImportDriveRequest extends Model
{
    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var bool
     */
    public $forceUpdate;

    /**
     * @var string
     */
    public $mountUrl;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'domainId' => 'DomainId',
        'endUserId' => 'EndUserId',
        'forceUpdate' => 'ForceUpdate',
        'mountUrl' => 'MountUrl',
        'platform' => 'Platform',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->forceUpdate) {
            $res['ForceUpdate'] = $this->forceUpdate;
        }

        if (null !== $this->mountUrl) {
            $res['MountUrl'] = $this->mountUrl;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
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
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['ForceUpdate'])) {
            $model->forceUpdate = $map['ForceUpdate'];
        }

        if (isset($map['MountUrl'])) {
            $model->mountUrl = $map['MountUrl'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
