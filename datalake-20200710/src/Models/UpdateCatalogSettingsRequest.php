<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UpdateCatalogSettingsRequest extends Model
{
    /**
     * @description CatalogId
     *
     * @var string
     */
    public $catalogId;

    /**
     * @var CatalogSettings
     */
    public $catalogSettings;
    protected $_name = [
        'catalogId'       => 'CatalogId',
        'catalogSettings' => 'CatalogSettings',
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
        if (null !== $this->catalogSettings) {
            $res['CatalogSettings'] = null !== $this->catalogSettings ? $this->catalogSettings->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCatalogSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['CatalogSettings'])) {
            $model->catalogSettings = CatalogSettings::fromMap($map['CatalogSettings']);
        }

        return $model;
    }
}
