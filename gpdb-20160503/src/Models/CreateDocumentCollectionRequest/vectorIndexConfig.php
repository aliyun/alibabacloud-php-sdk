<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDocumentCollectionRequest;

use AlibabaCloud\Dara\Model;

class vectorIndexConfig extends Model
{
    /**
     * @var int
     */
    public $nlist;

    /**
     * @var int
     */
    public $rabitqBits;
    protected $_name = [
        'nlist' => 'Nlist',
        'rabitqBits' => 'RabitqBits',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nlist) {
            $res['Nlist'] = $this->nlist;
        }

        if (null !== $this->rabitqBits) {
            $res['RabitqBits'] = $this->rabitqBits;
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
        if (isset($map['Nlist'])) {
            $model->nlist = $map['Nlist'];
        }

        if (isset($map['RabitqBits'])) {
            $model->rabitqBits = $map['RabitqBits'];
        }

        return $model;
    }
}
