<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CatalogInput extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $locationUri;

    /**
     * @var string
     */
    public $owner;
    protected $_name = [
        'catalogId'   => 'CatalogId',
        'description' => 'Description',
        'locationUri' => 'LocationUri',
        'owner'       => 'Owner',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->locationUri) {
            $res['LocationUri'] = $this->locationUri;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CatalogInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LocationUri'])) {
            $model->locationUri = $map['LocationUri'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        return $model;
    }
}
