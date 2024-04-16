<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn;
use AlibabaCloud\Tea\Model;

class sensitiveColumnList extends Model
{
    /**
     * @var sensitiveColumn[]
     */
    public $sensitiveColumn;
    protected $_name = [
        'sensitiveColumn' => 'SensitiveColumn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitiveColumn) {
            $res['SensitiveColumn'] = [];
            if (null !== $this->sensitiveColumn && \is_array($this->sensitiveColumn)) {
                $n = 0;
                foreach ($this->sensitiveColumn as $item) {
                    $res['SensitiveColumn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveColumnList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SensitiveColumn'])) {
            if (!empty($map['SensitiveColumn'])) {
                $model->sensitiveColumn = [];
                $n                      = 0;
                foreach ($map['SensitiveColumn'] as $item) {
                    $model->sensitiveColumn[$n++] = null !== $item ? sensitiveColumn::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
