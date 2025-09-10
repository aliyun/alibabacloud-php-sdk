<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetStoreViewIndexResponseBody\indexes;

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
        if (\is_array($this->indexes)) {
            Model::validateArray($this->indexes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexes) {
            if (\is_array($this->indexes)) {
                $res['indexes'] = [];
                $n1 = 0;
                foreach ($this->indexes as $item1) {
                    $res['indexes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['indexes'])) {
            if (!empty($map['indexes'])) {
                $model->indexes = [];
                $n1 = 0;
                foreach ($map['indexes'] as $item1) {
                    $model->indexes[$n1] = indexes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
