<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class UpdateSolutionInstanceAttributeRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the instance.
     *
     * @example defaultDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the instance.
     *
     * @example defaultName
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region where the dedicated block storage cluster resides. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the instance.
     *
     * @example inst-***
     *
     * @var string
     */
    public $solutionInstanceId;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'description'        => 'Description',
        'name'               => 'Name',
        'regionId'           => 'RegionId',
        'solutionInstanceId' => 'SolutionInstanceId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->solutionInstanceId) {
            $res['SolutionInstanceId'] = $this->solutionInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSolutionInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SolutionInstanceId'])) {
            $model->solutionInstanceId = $map['SolutionInstanceId'];
        }

        return $model;
    }
}
