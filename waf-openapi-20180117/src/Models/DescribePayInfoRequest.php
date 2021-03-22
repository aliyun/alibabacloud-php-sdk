<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models;

use AlibabaCloud\Tea\Model;

class DescribePayInfoRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $instanceSource;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'lang'            => 'Lang',
        'region'          => 'Region',
        'instanceSource'  => 'InstanceSource',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
