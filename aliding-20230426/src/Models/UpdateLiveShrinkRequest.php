<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveShrinkRequest extends Model
{
    /**
     * @example http://sss/sss
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @example 这是一个直播
     *
     * @var string
     */
    public $introduction;

    /**
     * @example 4d38xxxxx
     *
     * @var string
     */
    public $liveId;

    /**
     * @example 1698596800000
     *
     * @var int
     */
    public $preEndTime;

    /**
     * @example 1691596800000
     *
     * @var int
     */
    public $preStartTime;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @example 标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'coverUrl'            => 'CoverUrl',
        'introduction'        => 'Introduction',
        'liveId'              => 'LiveId',
        'preEndTime'          => 'PreEndTime',
        'preStartTime'        => 'PreStartTime',
        'tenantContextShrink' => 'TenantContext',
        'title'               => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->preEndTime) {
            $res['PreEndTime'] = $this->preEndTime;
        }
        if (null !== $this->preStartTime) {
            $res['PreStartTime'] = $this->preStartTime;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['PreEndTime'])) {
            $model->preEndTime = $map['PreEndTime'];
        }
        if (isset($map['PreStartTime'])) {
            $model->preStartTime = $map['PreStartTime'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
