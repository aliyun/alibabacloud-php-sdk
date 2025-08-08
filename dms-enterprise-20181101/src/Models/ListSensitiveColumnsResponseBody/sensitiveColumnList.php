<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsResponseBody\sensitiveColumnList\sensitiveColumn;

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
        if (\is_array($this->sensitiveColumn)) {
            Model::validateArray($this->sensitiveColumn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sensitiveColumn) {
            if (\is_array($this->sensitiveColumn)) {
                $res['SensitiveColumn'] = [];
                $n1 = 0;
                foreach ($this->sensitiveColumn as $item1) {
                    $res['SensitiveColumn'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SensitiveColumn'])) {
            if (!empty($map['SensitiveColumn'])) {
                $model->sensitiveColumn = [];
                $n1 = 0;
                foreach ($map['SensitiveColumn'] as $item1) {
                    $model->sensitiveColumn[$n1] = sensitiveColumn::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
