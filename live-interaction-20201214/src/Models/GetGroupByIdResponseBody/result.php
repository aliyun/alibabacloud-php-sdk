<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupByIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 群会话ID
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 群主ID
     *
     * @var string
     */
    public $ownerAppUid;

    /**
     * @description 群图像
     *
     * @var string
     */
    public $iconMediaId;

    /**
     * @description 群名称
     *
     * @var string
     */
    public $title;

    /**
     * @description 当前群人数
     *
     * @var int
     */
    public $memberCount;

    /**
     * @description 群人数上限
     *
     * @var int
     */
    public $memberLimit;

    /**
     * @description 群扩展信息
     *
     * @var string[]
     */
    public $extensions;

    /**
     * @description 群创建时间
     *
     * @var int
     */
    public $ceateTime;
    protected $_name = [
        'appCid'      => 'AppCid',
        'ownerAppUid' => 'OwnerAppUid',
        'iconMediaId' => 'IconMediaId',
        'title'       => 'Title',
        'memberCount' => 'MemberCount',
        'memberLimit' => 'MemberLimit',
        'extensions'  => 'Extensions',
        'ceateTime'   => 'CeateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->ownerAppUid) {
            $res['OwnerAppUid'] = $this->ownerAppUid;
        }
        if (null !== $this->iconMediaId) {
            $res['IconMediaId'] = $this->iconMediaId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }
        if (null !== $this->memberLimit) {
            $res['MemberLimit'] = $this->memberLimit;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->ceateTime) {
            $res['CeateTime'] = $this->ceateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['OwnerAppUid'])) {
            $model->ownerAppUid = $map['OwnerAppUid'];
        }
        if (isset($map['IconMediaId'])) {
            $model->iconMediaId = $map['IconMediaId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }
        if (isset($map['MemberLimit'])) {
            $model->memberLimit = $map['MemberLimit'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['CeateTime'])) {
            $model->ceateTime = $map['CeateTime'];
        }

        return $model;
    }
}
