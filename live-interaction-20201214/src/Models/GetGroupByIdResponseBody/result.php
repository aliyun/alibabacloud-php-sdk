<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupByIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example $2$111000
     *
     * @var string
     */
    public $appCid;

    /**
     * @example 1599999999
     *
     * @var int
     */
    public $ceateTime;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @example @$111444
     *
     * @var string
     */
    public $iconMediaId;

    /**
     * @example 7
     *
     * @var int
     */
    public $memberCount;

    /**
     * @example 100
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
     * @var string
     */
    public $title;
    protected $_name = [
        'appCid'      => 'AppCid',
        'ceateTime'   => 'CeateTime',
        'extensions'  => 'Extensions',
        'iconMediaId' => 'IconMediaId',
        'memberCount' => 'MemberCount',
        'memberLimit' => 'MemberLimit',
        'ownerAppUid' => 'OwnerAppUid',
        'title'       => 'Title',
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
        if (null !== $this->ceateTime) {
            $res['CeateTime'] = $this->ceateTime;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->iconMediaId) {
            $res['IconMediaId'] = $this->iconMediaId;
        }
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }
        if (null !== $this->memberLimit) {
            $res['MemberLimit'] = $this->memberLimit;
        }
        if (null !== $this->ownerAppUid) {
            $res['OwnerAppUid'] = $this->ownerAppUid;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CeateTime'])) {
            $model->ceateTime = $map['CeateTime'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['IconMediaId'])) {
            $model->iconMediaId = $map['IconMediaId'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }
        if (isset($map['MemberLimit'])) {
            $model->memberLimit = $map['MemberLimit'];
        }
        if (isset($map['OwnerAppUid'])) {
            $model->ownerAppUid = $map['OwnerAppUid'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
