<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveRequest\tenantContext;

class UpdateLiveRequest extends Model
{
    /**
     * @var string
     */
    public $coverUrl;
    /**
     * @var string
     */
    public $introduction;
    /**
     * @var string
     */
    public $liveId;
    /**
     * @var int
     */
    public $preEndTime;
    /**
     * @var int
     */
    public $preStartTime;
    /**
     * @var tenantContext
     */
    public $tenantContext;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'coverUrl'      => 'CoverUrl',
        'introduction'  => 'Introduction',
        'liveId'        => 'LiveId',
        'preEndTime'    => 'PreEndTime',
        'preStartTime'  => 'PreStartTime',
        'tenantContext' => 'TenantContext',
        'title'         => 'Title',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
