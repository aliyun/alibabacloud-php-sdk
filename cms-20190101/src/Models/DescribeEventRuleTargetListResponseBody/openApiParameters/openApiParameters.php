<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\openApiParameters;

use AlibabaCloud\Tea\Model;

class openApiParameters extends Model
{
    /**
     * @description The name of the API operation.
     *
     * @example PutLogs
     *
     * @var string
     */
    public $action;

    /**
     * @description The ARN of the API operation.
     *
     * - ResourceId: the resource ID
     * @example acs:log:cn-hangzhou::project/cms-log-mon***\/logstore/cxxxx***
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the recipient.
     *
     * @example 3
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the cloud service to which the API operation belongs.
     *
     * @example log
     *
     * @var string
     */
    public $product;

    /**
     * @description The region where the resource resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The name of the role.
     *
     * @example MyRole
     *
     * @var string
     */
    public $role;

    /**
     * @description The version of the API.
     *
     * @example 2019-01-01
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'action'  => 'Action',
        'arn'     => 'Arn',
        'id'      => 'Id',
        'product' => 'Product',
        'region'  => 'Region',
        'role'    => 'Role',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openApiParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
