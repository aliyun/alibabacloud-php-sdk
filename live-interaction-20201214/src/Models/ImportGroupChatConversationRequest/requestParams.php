<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatConversationRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 唯一标识，用于重入
     *
     * @var string
     */
    public $uuid;

    /**
     * @description 群主uid
     *
     * @var string
     */
    public $ownerAppUid;

    /**
     * @description 群标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 群头像
     *
     * @var string
     */
    public $iconMediaId;

    /**
     * @description 群上限
     *
     * @var int
     */
    public $memberLimit;

    /**
     * @description 扩展字段
     *
     * @var string[]
     */
    public $extensions;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 是否全员禁言
     *
     * @var bool
     */
    public $silenceAll;
    protected $_name = [
        'uuid'        => 'Uuid',
        'ownerAppUid' => 'OwnerAppUid',
        'title'       => 'Title',
        'iconMediaId' => 'IconMediaId',
        'memberLimit' => 'MemberLimit',
        'extensions'  => 'Extensions',
        'createTime'  => 'CreateTime',
        'silenceAll'  => 'SilenceAll',
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
        if (null !== $this->ownerAppUid) {
            $res['OwnerAppUid'] = $this->ownerAppUid;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->iconMediaId) {
            $res['IconMediaId'] = $this->iconMediaId;
        }
        if (null !== $this->memberLimit) {
            $res['MemberLimit'] = $this->memberLimit;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->silenceAll) {
            $res['SilenceAll'] = $this->silenceAll;
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
        if (isset($map['OwnerAppUid'])) {
            $model->ownerAppUid = $map['OwnerAppUid'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['IconMediaId'])) {
            $model->iconMediaId = $map['IconMediaId'];
        }
        if (isset($map['MemberLimit'])) {
            $model->memberLimit = $map['MemberLimit'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SilenceAll'])) {
            $model->silenceAll = $map['SilenceAll'];
        }

        return $model;
    }
}
