<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class AlterCatalogResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $missing;

    /**
     * @var string[]
     */
    public $removed;

    /**
     * @var string[]
     */
    public $updated;
    protected $_name = [
        'missing' => 'missing',
        'removed' => 'removed',
        'updated' => 'updated',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->missing) {
            $res['missing'] = $this->missing;
        }
        if (null !== $this->removed) {
            $res['removed'] = $this->removed;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlterCatalogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['missing'])) {
            if (!empty($map['missing'])) {
                $model->missing = $map['missing'];
            }
        }
        if (isset($map['removed'])) {
            if (!empty($map['removed'])) {
                $model->removed = $map['removed'];
            }
        }
        if (isset($map['updated'])) {
            if (!empty($map['updated'])) {
                $model->updated = $map['updated'];
            }
        }

        return $model;
    }
}
