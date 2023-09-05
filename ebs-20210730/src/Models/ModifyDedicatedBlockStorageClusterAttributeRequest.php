<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedBlockStorageClusterAttributeRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests.
     *
     * The ClientToken value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure idempotence ](~~25693~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the dedicated block storage cluster.
     *
     * @example dbsc-cn-od43bf****
     *
     * @var string
     */
    public $dbscId;

    /**
     * @description The new name of the dedicated block storage cluster.
     *
     * @example my-test-dbsc
     *
     * @var string
     */
    public $dbscName;

    /**
     * @description The new description of dedicated block storage cluster.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The region ID of the dedicated block storage cluster. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dbscId'      => 'DbscId',
        'dbscName'    => 'DbscName',
        'description' => 'Description',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dbscId) {
            $res['DbscId'] = $this->dbscId;
        }
        if (null !== $this->dbscName) {
            $res['DbscName'] = $this->dbscName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDedicatedBlockStorageClusterAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DbscId'])) {
            $model->dbscId = $map['DbscId'];
        }
        if (isset($map['DbscName'])) {
            $model->dbscName = $map['DbscName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
