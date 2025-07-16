<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CreateLiveRequest extends Model
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
     * @description This parameter is required.
     *
     * @example 1698596800000
     *
     * @var int
     */
    public $preEndTime;

    /**
     * @description This parameter is required.
     *
     * @example 1691596800000
     *
     * @var int
     */
    public $preStartTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $publicType;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example 标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'coverUrl' => 'CoverUrl',
        'introduction' => 'Introduction',
        'preEndTime' => 'PreEndTime',
        'preStartTime' => 'PreStartTime',
        'publicType' => 'PublicType',
        'tenantContext' => 'TenantContext',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }
        if (null !== $this->preEndTime) {
            $res['PreEndTime'] = $this->preEndTime;
        }
        if (null !== $this->preStartTime) {
            $res['PreStartTime'] = $this->preStartTime;
        }
        if (null !== $this->publicType) {
            $res['PublicType'] = $this->publicType;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveRequest
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
        if (isset($map['PreEndTime'])) {
            $model->preEndTime = $map['PreEndTime'];
        }
        if (isset($map['PreStartTime'])) {
            $model->preStartTime = $map['PreStartTime'];
        }
        if (isset($map['PublicType'])) {
            $model->publicType = $map['PublicType'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
