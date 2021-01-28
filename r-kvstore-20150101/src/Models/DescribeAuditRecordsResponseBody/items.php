<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditRecordsResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditRecordsResponseBody\items\SQL;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var SQL[]
     */
    public $SQL;
    protected $_name = [
        'SQL' => 'SQL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQL) {
            $res['SQL'] = [];
            if (null !== $this->SQL && \is_array($this->SQL)) {
                $n = 0;
                foreach ($this->SQL as $item) {
                    $res['SQL'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQL'])) {
            if (!empty($map['SQL'])) {
                $model->SQL = [];
                $n          = 0;
                foreach ($map['SQL'] as $item) {
                    $model->SQL[$n++] = null !== $item ? SQL::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
