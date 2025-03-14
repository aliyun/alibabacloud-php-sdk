<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteSearchConditionRequest extends Model
{
    /**
     * @description The name of the frequently used search condition.
     *
     * >  You can call the [DescribeSearchCondition](~~DescribeSearchCondition~~) operation to query frequently used search conditions.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The source IP address of the request.
     *
     * @example 19.12.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the asset. Default value: ecs. Valid values:
     *
     *   **ecs**: an Elastic Compute Service (ECS) instance.
     *   **cloud_product**: an Alibaba Cloud service.
     *
     * @example ecs
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'sourceIp' => 'SourceIp',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSearchConditionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
