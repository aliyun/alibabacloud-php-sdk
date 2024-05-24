<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\SDK\Devs\V20230714\Models\InfraStackSpec\templateSpec;
use AlibabaCloud\Tea\Model;

class InfraStackSpec extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionID;

    /**
     * @example acs:ram::1234567890:role/devs-role
     *
     * @var string
     */
    public $roleArn;

    /**
     * @example serverless.devs.com/fc-builtin
     *
     * @var string
     */
    public $templateName;

    /**
     * @var templateSpec
     */
    public $templateSpec;

    /**
     * @example {"testKey":"testValue"}
     *
     * @var mixed[]
     */
    public $templateVariables;
    protected $_name = [
        'regionID'          => 'regionID',
        'roleArn'           => 'roleArn',
        'templateName'      => 'templateName',
        'templateSpec'      => 'templateSpec',
        'templateVariables' => 'templateVariables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionID) {
            $res['regionID'] = $this->regionID;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }
        if (null !== $this->templateSpec) {
            $res['templateSpec'] = null !== $this->templateSpec ? $this->templateSpec->toMap() : null;
        }
        if (null !== $this->templateVariables) {
            $res['templateVariables'] = $this->templateVariables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InfraStackSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionID'])) {
            $model->regionID = $map['regionID'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }
        if (isset($map['templateSpec'])) {
            $model->templateSpec = templateSpec::fromMap($map['templateSpec']);
        }
        if (isset($map['templateVariables'])) {
            $model->templateVariables = $map['templateVariables'];
        }

        return $model;
    }
}
