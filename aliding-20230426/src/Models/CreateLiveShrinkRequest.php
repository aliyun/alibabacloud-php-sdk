<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateLiveShrinkRequest extends Model
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
     * @var int
     */
    public $preEndTime;

    /**
     * @var int
     */
    public $preStartTime;

    /**
     * @var int
     */
    public $publicType;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'coverUrl' => 'CoverUrl',
        'introduction' => 'Introduction',
        'preEndTime' => 'PreEndTime',
        'preStartTime' => 'PreStartTime',
        'publicType' => 'PublicType',
        'tenantContextShrink' => 'TenantContext',
        'title' => 'Title',
    ];

    public function validate()
    {
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

        if (null !== $this->preEndTime) {
            $res['PreEndTime'] = $this->preEndTime;
        }

        if (null !== $this->preStartTime) {
            $res['PreStartTime'] = $this->preStartTime;
        }

        if (null !== $this->publicType) {
            $res['PublicType'] = $this->publicType;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
