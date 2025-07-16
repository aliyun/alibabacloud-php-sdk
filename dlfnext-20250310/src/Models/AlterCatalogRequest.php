<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class AlterCatalogRequest extends Model
{
    /**
     * @var string[]
     */
    public $removals;

    /**
     * @var string[]
     */
    public $updates;
    protected $_name = [
        'removals' => 'removals',
        'updates' => 'updates',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->removals) {
            $res['removals'] = $this->removals;
        }
        if (null !== $this->updates) {
            $res['updates'] = $this->updates;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlterCatalogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['removals'])) {
            if (!empty($map['removals'])) {
                $model->removals = $map['removals'];
            }
        }
        if (isset($map['updates'])) {
            $model->updates = $map['updates'];
        }

        return $model;
    }
}
