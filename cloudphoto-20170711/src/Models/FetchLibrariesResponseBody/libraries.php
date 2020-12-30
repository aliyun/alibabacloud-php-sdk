<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchLibrariesResponseBody;

use AlibabaCloud\Tea\Model;

class libraries extends Model
{
    /**
     * @var int
     */
    public $ctime;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var int
     */
    public $totalQuota;
    protected $_name = [
        'ctime'      => 'Ctime',
        'libraryId'  => 'LibraryId',
        'totalQuota' => 'TotalQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return libraries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        return $model;
    }
}
