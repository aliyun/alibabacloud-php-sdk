<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\columns;

use AlibabaCloud\Dara\Model;

class associatedEntity extends Model
{
    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @var string
     */
    public $dimensionDisplayName;

    /**
     * @var int
     */
    public $dimensionId;

    /**
     * @var string
     */
    public $dimensionName;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
        'dimensionDisplayName' => 'DimensionDisplayName',
        'dimensionId' => 'DimensionId',
        'dimensionName' => 'DimensionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }

        if (null !== $this->dimensionDisplayName) {
            $res['DimensionDisplayName'] = $this->dimensionDisplayName;
        }

        if (null !== $this->dimensionId) {
            $res['DimensionId'] = $this->dimensionId;
        }

        if (null !== $this->dimensionName) {
            $res['DimensionName'] = $this->dimensionName;
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
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }

        if (isset($map['DimensionDisplayName'])) {
            $model->dimensionDisplayName = $map['DimensionDisplayName'];
        }

        if (isset($map['DimensionId'])) {
            $model->dimensionId = $map['DimensionId'];
        }

        if (isset($map['DimensionName'])) {
            $model->dimensionName = $map['DimensionName'];
        }

        return $model;
    }
}
