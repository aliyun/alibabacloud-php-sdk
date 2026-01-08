<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogResponseBody\model;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogResponseBody\model\paging\cursors;

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
        if (null !== $this->cursors) {
            $this->cursors->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cursors) {
            $res['Cursors'] = null !== $this->cursors ? $this->cursors->toArray($noStream) : $this->cursors;
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
        if (isset($map['Cursors'])) {
            $model->cursors = cursors::fromMap($map['Cursors']);
        }

        return $model;
    }
}
