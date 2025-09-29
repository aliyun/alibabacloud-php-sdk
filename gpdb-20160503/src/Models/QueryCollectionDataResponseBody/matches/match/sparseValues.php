<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match\sparseValues\indices;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match\sparseValues\values;

class sparseValues extends Model
{
    /**
     * @var indices
     */
    public $indices;

    /**
     * @var values
     */
    public $values;
    protected $_name = [
        'indices' => 'Indices',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (null !== $this->indices) {
            $this->indices->validate();
        }
        if (null !== $this->values) {
            $this->values->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indices) {
            $res['Indices'] = null !== $this->indices ? $this->indices->toArray($noStream) : $this->indices;
        }

        if (null !== $this->values) {
            $res['Values'] = null !== $this->values ? $this->values->toArray($noStream) : $this->values;
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
        if (isset($map['Indices'])) {
            $model->indices = indices::fromMap($map['Indices']);
        }

        if (isset($map['Values'])) {
            $model->values = values::fromMap($map['Values']);
        }

        return $model;
    }
}
