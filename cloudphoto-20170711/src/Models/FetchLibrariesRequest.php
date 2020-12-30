<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class FetchLibrariesRequest extends Model
{
    /**
     * @var string
     */
    public $storeName;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var bool
     */
    public $needQuota;
    protected $_name = [
        'storeName' => 'StoreName',
        'page'      => 'Page',
        'size'      => 'Size',
        'needQuota' => 'NeedQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->needQuota) {
            $res['NeedQuota'] = $this->needQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FetchLibrariesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['NeedQuota'])) {
            $model->needQuota = $map['NeedQuota'];
        }

        return $model;
    }
}
