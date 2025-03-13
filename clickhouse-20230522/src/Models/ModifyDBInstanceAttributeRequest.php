<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceAttributeRequest extends Model
{
    /**
     * @description The configuration that you want to modify.
     *
     *   MaintainTime: the O\\&M time
     *   DBInstanceDescription: the cluster name
     *
     * This parameter is required.
     *
     * @example DBInstanceDescription
     *
     * @var string
     */
    public $attributeType;

    /**
     * @description The new value of the configuration.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $attributeValue;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example cc-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The code of the cloud service.
     *
     * @example clickhouse
     *
     * @var string
     */
    public $product;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'attributeType' => 'AttributeType',
        'attributeValue' => 'AttributeValue',
        'DBInstanceId' => 'DBInstanceId',
        'product' => 'Product',
        'regionId' => 'RegionId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeType) {
            $res['AttributeType'] = $this->attributeType;
        }
        if (null !== $this->attributeValue) {
            $res['AttributeValue'] = $this->attributeValue;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeType'])) {
            $model->attributeType = $map['AttributeType'];
        }
        if (isset($map['AttributeValue'])) {
            $model->attributeValue = $map['AttributeValue'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
