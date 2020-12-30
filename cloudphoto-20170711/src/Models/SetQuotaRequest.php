<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class SetQuotaRequest extends Model
{
    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'totalQuota' => 'TotalQuota',
        'storeName'  => 'StoreName',
        'libraryId'  => 'LibraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }

        return $model;
    }
}
