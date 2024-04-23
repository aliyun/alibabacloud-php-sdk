<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\GetStoreViewIndexResponseBody\indexes;
use AlibabaCloud\Tea\Model;

class GetStoreViewIndexResponseBody extends Model
{
    /**
     * @var indexes[]
     */
    public $indexes;
    protected $_name = [
        'indexes' => 'indexes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexes) {
            $res['indexes'] = [];
            if (null !== $this->indexes && \is_array($this->indexes)) {
                $n = 0;
                foreach ($this->indexes as $item) {
                    $res['indexes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStoreViewIndexResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['indexes'])) {
            if (!empty($map['indexes'])) {
                $model->indexes = [];
                $n              = 0;
                foreach ($map['indexes'] as $item) {
                    $model->indexes[$n++] = null !== $item ? indexes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
