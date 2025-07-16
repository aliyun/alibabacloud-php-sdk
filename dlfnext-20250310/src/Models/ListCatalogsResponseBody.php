<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListCatalogsResponseBody extends Model
{
    /**
     * @var Catalog[]
     */
    public $catalogs;

    /**
     * @example E8ABEB1C3DB893D16576269017992F57
     *
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'catalogs' => 'catalogs',
        'nextPageToken' => 'nextPageToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogs) {
            $res['catalogs'] = [];
            if (null !== $this->catalogs && \is_array($this->catalogs)) {
                $n = 0;
                foreach ($this->catalogs as $item) {
                    $res['catalogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCatalogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['catalogs'])) {
            if (!empty($map['catalogs'])) {
                $model->catalogs = [];
                $n = 0;
                foreach ($map['catalogs'] as $item) {
                    $model->catalogs[$n++] = null !== $item ? Catalog::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        return $model;
    }
}
