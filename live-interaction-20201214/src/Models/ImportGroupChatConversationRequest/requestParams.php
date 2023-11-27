<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatConversationRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example 1613700223555
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @example $iQEMAqNqcGcDAQTNAyAFzQJYBtoAIYQBpAuf1dQCqrY4aIGemoBLONIDzwAAAXazCVSoBM0NyAcACA****
     *
     * @var string
     */
    public $iconMediaId;

    /**
     * @example 50
     *
     * @var int
     */
    public $memberLimit;

    /**
     * @example 123
     *
     * @var string
     */
    public $ownerAppUid;

    /**
     * @example false
     *
     * @var bool
     */
    public $silenceAll;

    /**
     * @example 群标题
     *
     * @var string
     */
    public $title;

    /**
     * @example 123456
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'extensions'  => 'Extensions',
        'iconMediaId' => 'IconMediaId',
        'memberLimit' => 'MemberLimit',
        'ownerAppUid' => 'OwnerAppUid',
        'silenceAll'  => 'SilenceAll',
        'title'       => 'Title',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->iconMediaId) {
            $res['IconMediaId'] = $this->iconMediaId;
        }
        if (null !== $this->memberLimit) {
            $res['MemberLimit'] = $this->memberLimit;
        }
        if (null !== $this->ownerAppUid) {
            $res['OwnerAppUid'] = $this->ownerAppUid;
        }
        if (null !== $this->silenceAll) {
            $res['SilenceAll'] = $this->silenceAll;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['IconMediaId'])) {
            $model->iconMediaId = $map['IconMediaId'];
        }
        if (isset($map['MemberLimit'])) {
            $model->memberLimit = $map['MemberLimit'];
        }
        if (isset($map['OwnerAppUid'])) {
            $model->ownerAppUid = $map['OwnerAppUid'];
        }
        if (isset($map['SilenceAll'])) {
            $model->silenceAll = $map['SilenceAll'];
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
