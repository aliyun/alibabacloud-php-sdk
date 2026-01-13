<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class ServiceConfigResult extends Model
{
    /**
     * @var string
     */
    public $poiSearchTotalQuota;

    /**
     * @var string
     */
    public $poiSearchUsedQuota;

    /**
     * @var string
     */
    public $searchTotalQuota;

    /**
     * @var string
     */
    public $searchUsedQuota;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'poiSearchTotalQuota' => 'poiSearchTotalQuota',
        'poiSearchUsedQuota' => 'poiSearchUsedQuota',
        'searchTotalQuota' => 'searchTotalQuota',
        'searchUsedQuota' => 'searchUsedQuota',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->poiSearchTotalQuota) {
            $res['poiSearchTotalQuota'] = $this->poiSearchTotalQuota;
        }

        if (null !== $this->poiSearchUsedQuota) {
            $res['poiSearchUsedQuota'] = $this->poiSearchUsedQuota;
        }

        if (null !== $this->searchTotalQuota) {
            $res['searchTotalQuota'] = $this->searchTotalQuota;
        }

        if (null !== $this->searchUsedQuota) {
            $res['searchUsedQuota'] = $this->searchUsedQuota;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['poiSearchTotalQuota'])) {
            $model->poiSearchTotalQuota = $map['poiSearchTotalQuota'];
        }

        if (isset($map['poiSearchUsedQuota'])) {
            $model->poiSearchUsedQuota = $map['poiSearchUsedQuota'];
        }

        if (isset($map['searchTotalQuota'])) {
            $model->searchTotalQuota = $map['searchTotalQuota'];
        }

        if (isset($map['searchUsedQuota'])) {
            $model->searchUsedQuota = $map['searchUsedQuota'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
