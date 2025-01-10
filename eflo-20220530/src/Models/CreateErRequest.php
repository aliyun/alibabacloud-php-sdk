<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class CreateErRequest extends Model
{
    /**
     * @description The description of the document.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Lingjun HUB Name
     *
     * This parameter is required.
     * @example er-wulanchabu-main
     *
     * @var string
     */
    public $erName;

    /**
     * @description Primary Zone
     *
     * This parameter is required.
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $masterZoneId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-acfmyuzlx2iihcy
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'description'     => 'Description',
        'erName'          => 'ErName',
        'masterZoneId'    => 'MasterZoneId',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->erName) {
            $res['ErName'] = $this->erName;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateErRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErName'])) {
            $model->erName = $map['ErName'];
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
