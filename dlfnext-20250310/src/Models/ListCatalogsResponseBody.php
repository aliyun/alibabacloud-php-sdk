<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListCatalogsResponseBody extends Model
{
    /**
     * @var Catalog[]
     */
    public $catalogs;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var PrepayResource[]
     */
    public $prepayResource;
    protected $_name = [
        'catalogs' => 'catalogs',
        'nextPageToken' => 'nextPageToken',
        'prepayResource' => 'prepayResource',
    ];

    public function validate()
    {
        if (\is_array($this->catalogs)) {
            Model::validateArray($this->catalogs);
        }
        if (\is_array($this->prepayResource)) {
            Model::validateArray($this->prepayResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogs) {
            if (\is_array($this->catalogs)) {
                $res['catalogs'] = [];
                $n1 = 0;
                foreach ($this->catalogs as $item1) {
                    $res['catalogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->prepayResource) {
            if (\is_array($this->prepayResource)) {
                $res['prepayResource'] = [];
                $n1 = 0;
                foreach ($this->prepayResource as $item1) {
                    $res['prepayResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['catalogs'])) {
            if (!empty($map['catalogs'])) {
                $model->catalogs = [];
                $n1 = 0;
                foreach ($map['catalogs'] as $item1) {
                    $model->catalogs[$n1] = Catalog::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        if (isset($map['prepayResource'])) {
            if (!empty($map['prepayResource'])) {
                $model->prepayResource = [];
                $n1 = 0;
                foreach ($map['prepayResource'] as $item1) {
                    $model->prepayResource[$n1] = PrepayResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
