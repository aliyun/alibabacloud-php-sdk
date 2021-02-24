<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupRequest;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupRequest\requestParams\initMembers;
use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description UUID(不可重复)
     *
     * @var string
     */
    public $uuid;

    /**
     * @description 创建者
     *
     * @var string
     */
    public $creatorAppUid;

    /**
     * @description 群标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 图标的id
     *
     * @var string
     */
    public $iconMediaId;

    /**
     * @description 拓展字段
     *
     * @var string[]
     */
    public $extensions;

    /**
     * @description 初始化成员
     *
     * @var initMembers[]
     */
    public $initMembers;
    protected $_name = [
        'uuid'          => 'Uuid',
        'creatorAppUid' => 'CreatorAppUid',
        'title'         => 'Title',
        'iconMediaId'   => 'IconMediaId',
        'extensions'    => 'Extensions',
        'initMembers'   => 'InitMembers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->creatorAppUid) {
            $res['CreatorAppUid'] = $this->creatorAppUid;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->iconMediaId) {
            $res['IconMediaId'] = $this->iconMediaId;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['CreatorAppUid'])) {
            $model->creatorAppUid = $map['CreatorAppUid'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['IconMediaId'])) {
            $model->iconMediaId = $map['IconMediaId'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
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

        return $model;
    }
}
