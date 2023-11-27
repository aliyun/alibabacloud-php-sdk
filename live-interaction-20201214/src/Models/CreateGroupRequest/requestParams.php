<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupRequest;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupRequest\requestParams\initMembers;
use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example 9100088885****
     *
     * @var string
     */
    public $creatorAppUid;

    /**
     * @var string
     */
    public $entranceId;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @example abc123
     *
     * @var string
     */
    public $iconMediaId;

    /**
     * @var initMembers[]
     */
    public $initMembers;

    /**
     * @example good
     *
     * @var string
     */
    public $title;

    /**
     * @example 12345678998765
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'creatorAppUid' => 'CreatorAppUid',
        'entranceId'    => 'EntranceId',
        'extensions'    => 'Extensions',
        'iconMediaId'   => 'IconMediaId',
        'initMembers'   => 'InitMembers',
        'title'         => 'Title',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorAppUid) {
            $res['CreatorAppUid'] = $this->creatorAppUid;
        }
        if (null !== $this->entranceId) {
            $res['EntranceId'] = $this->entranceId;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->iconMediaId) {
            $res['IconMediaId'] = $this->iconMediaId;
        }
        if (null !== $this->initMembers) {
            $res['InitMembers'] = [];
            if (null !== $this->initMembers && \is_array($this->initMembers)) {
                $n = 0;
                foreach ($this->initMembers as $item) {
                    $res['InitMembers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorAppUid'])) {
            $model->creatorAppUid = $map['CreatorAppUid'];
        }
        if (isset($map['EntranceId'])) {
            $model->entranceId = $map['EntranceId'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['IconMediaId'])) {
            $model->iconMediaId = $map['IconMediaId'];
        }
        if (isset($map['InitMembers'])) {
            if (!empty($map['InitMembers'])) {
                $model->initMembers = [];
                $n                  = 0;
                foreach ($map['InitMembers'] as $item) {
                    $model->initMembers[$n++] = null !== $item ? initMembers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
