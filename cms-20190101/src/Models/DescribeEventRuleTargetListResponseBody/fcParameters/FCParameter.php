<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\fcParameters;

use AlibabaCloud\Tea\Model;

class FCParameter extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the function.
     *
     * - ResourceId: the resource ID
     * @example acs:log:cn-hangzhou::project/cms-log-mon***\/logstore/cxxxx***
     *
     * @var string
     */
    public $arn;

    /**
     * @description The name of the function.
     *
     * @example fcTest1
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The ID of the recipient.
     *
     * @example 3
     *
     * @var string
     */
    public $id;

    /**
     * @description The region where Function Compute is deployed.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $region;

    /**
     * @description The name of the Function Compute service.
     *
     * @example service1
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'arn'          => 'Arn',
        'functionName' => 'FunctionName',
        'id'           => 'Id',
        'region'       => 'Region',
        'serviceName'  => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FCParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
