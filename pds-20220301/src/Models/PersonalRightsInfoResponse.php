<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (null !== $this->historyLatestRights) {
            $this->historyLatestRights->validate();
        }
        if (null !== $this->otherRights) {
            $this->otherRights->validate();
        }
        if (\is_array($this->privileges)) {
            Model::validateArray($this->privileges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresTime) {
            $res['expires_time'] = $this->expiresTime;
        }

        if (null !== $this->historyLatestRights) {
            $res['history_latest_rights'] = null !== $this->historyLatestRights ? $this->historyLatestRights->toArray($noStream) : $this->historyLatestRights;
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
            $res['other_rights'] = null !== $this->otherRights ? $this->otherRights->toArray($noStream) : $this->otherRights;
        }

        if (null !== $this->privileges) {
            if (\is_array($this->privileges)) {
                $res['privileges'] = [];
                $n1 = 0;
                foreach ($this->privileges as $item1) {
                    $res['privileges'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['privileges'] as $item1) {
                    $model->privileges[$n1++] = DataBoxPrivileges::fromMap($item1);
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
