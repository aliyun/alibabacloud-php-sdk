<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\fcParameters;

use AlibabaCloud\Dara\Model;

class FCParameter extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'arn' => 'Arn',
        'functionName' => 'FunctionName',
        'id' => 'Id',
        'region' => 'Region',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
