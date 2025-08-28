<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditRecordsResponseBody\items\SQL;

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
        if (\is_array($this->SQL)) {
            Model::validateArray($this->SQL);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SQL) {
            if (\is_array($this->SQL)) {
                $res['SQL'] = [];
                $n1 = 0;
                foreach ($this->SQL as $item1) {
                    $res['SQL'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SQL'])) {
            if (!empty($map['SQL'])) {
                $model->SQL = [];
                $n1 = 0;
                foreach ($map['SQL'] as $item1) {
                    $model->SQL[$n1] = SQL::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
