<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListCatalogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\Catalog;

class data extends Model
{
    /**
     * @var Catalog[]
     */
    public $catalogs;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'catalogs' => 'Catalogs',
        'nextToken' => 'NextToken',
        'total' => 'Total',
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

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
