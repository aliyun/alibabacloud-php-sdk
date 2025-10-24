<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties;

use AlibabaCloud\Dara\Model;

class externalProjectProperties extends Model
{
    /**
     * @var string
     */
    public $isExternalCatalogBound;
    protected $_name = [
        'isExternalCatalogBound' => 'isExternalCatalogBound',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isExternalCatalogBound) {
            $res['isExternalCatalogBound'] = $this->isExternalCatalogBound;
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
        if (isset($map['isExternalCatalogBound'])) {
            $model->isExternalCatalogBound = $map['isExternalCatalogBound'];
        }

        return $model;
    }
}
