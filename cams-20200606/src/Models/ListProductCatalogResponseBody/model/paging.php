<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogResponseBody\model;

use AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogResponseBody\model\paging\cursors;
use AlibabaCloud\Tea\Model;

class paging extends Model
{
    /**
     * @var cursors
     */
    public $cursors;
    protected $_name = [
        'cursors' => 'Cursors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cursors) {
            $res['Cursors'] = null !== $this->cursors ? $this->cursors->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paging
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cursors'])) {
            $model->cursors = cursors::fromMap($map['Cursors']);
        }

        return $model;
    }
}
