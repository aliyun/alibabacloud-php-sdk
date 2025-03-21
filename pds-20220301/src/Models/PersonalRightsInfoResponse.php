<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class PersonalRightsInfoResponse extends Model
{
    /**
     * @var string
     */
    public $expiresTime;

    /**
     * @var PersonalRightsInfoResponse
     */
    public $historyLatestRights;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var bool
     */
    public $isExpires;

    /**
     * @var string
     */
    public $name;

    /**
     * @var PersonalRightsInfoResponse
     */
    public $otherRights;

    /**
     * @var DataBoxPrivileges[]
     */
    public $privileges;

    /**
     * @var string
     */
    public $spuId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'expiresTime' => 'expires_time',
        'historyLatestRights' => 'history_latest_rights',
        'icon' => 'icon',
        'isExpires' => 'is_expires',
        'name' => 'name',
        'otherRights' => 'other_rights',
        'privileges' => 'privileges',
        'spuId' => 'spu_id',
        'title' => 'title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiresTime) {
            $res['expires_time'] = $this->expiresTime;
        }
        if (null !== $this->historyLatestRights) {
            $res['history_latest_rights'] = null !== $this->historyLatestRights ? $this->historyLatestRights->toMap() : null;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->isExpires) {
            $res['is_expires'] = $this->isExpires;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->otherRights) {
            $res['other_rights'] = null !== $this->otherRights ? $this->otherRights->toMap() : null;
        }
        if (null !== $this->privileges) {
            $res['privileges'] = [];
            if (null !== $this->privileges && \is_array($this->privileges)) {
                $n = 0;
                foreach ($this->privileges as $item) {
                    $res['privileges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spuId) {
            $res['spu_id'] = $this->spuId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PersonalRightsInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expires_time'])) {
            $model->expiresTime = $map['expires_time'];
        }
        if (isset($map['history_latest_rights'])) {
            $model->historyLatestRights = self::fromMap($map['history_latest_rights']);
        }
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['is_expires'])) {
            $model->isExpires = $map['is_expires'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['other_rights'])) {
            $model->otherRights = self::fromMap($map['other_rights']);
        }
        if (isset($map['privileges'])) {
            if (!empty($map['privileges'])) {
                $model->privileges = [];
                $n = 0;
                foreach ($map['privileges'] as $item) {
                    $model->privileges[$n++] = null !== $item ? DataBoxPrivileges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['spu_id'])) {
            $model->spuId = $map['spu_id'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
