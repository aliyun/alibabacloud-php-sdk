<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListLumaCatalogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\Catalog;

class data extends Model
{
    /**
     * @var Catalog[]
     */
    public $catalogs;
    protected $_name = [
        'catalogs' => 'Catalogs',
    ];

    public function validate()
    {
        if (\is_array($this->catalogs)) {
            Model::validateArray($this->catalogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogs) {
            if (\is_array($this->catalogs)) {
                $res['Catalogs'] = [];
                $n1 = 0;
                foreach ($this->catalogs as $item1) {
                    $res['Catalogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Catalogs'])) {
            if (!empty($map['Catalogs'])) {
                $model->catalogs = [];
                $n1 = 0;
                foreach ($map['Catalogs'] as $item1) {
                    $model->catalogs[$n1] = Catalog::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
