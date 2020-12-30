<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @var int
     */
    public $photosCount;

    /**
     * @var int
     */
    public $videosCount;

    /**
     * @var int
     */
    public $facesCount;

    /**
     * @var int
     */
    public $usedQuota;

    /**
     * @var int
     */
    public $totalQuota;
    protected $_name = [
        'photosCount' => 'PhotosCount',
        'videosCount' => 'VideosCount',
        'facesCount'  => 'FacesCount',
        'usedQuota'   => 'UsedQuota',
        'totalQuota'  => 'TotalQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->photosCount) {
            $res['PhotosCount'] = $this->photosCount;
        }
        if (null !== $this->videosCount) {
            $res['VideosCount'] = $this->videosCount;
        }
        if (null !== $this->facesCount) {
            $res['FacesCount'] = $this->facesCount;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = $this->usedQuota;
        }
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhotosCount'])) {
            $model->photosCount = $map['PhotosCount'];
        }
        if (isset($map['VideosCount'])) {
            $model->videosCount = $map['VideosCount'];
        }
        if (isset($map['FacesCount'])) {
            $model->facesCount = $map['FacesCount'];
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = $map['UsedQuota'];
        }
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        return $model;
    }
}
