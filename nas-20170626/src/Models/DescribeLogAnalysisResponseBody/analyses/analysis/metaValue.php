<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponseBody\analyses\analysis;

use AlibabaCloud\Tea\Model;

class metaValue extends Model
{
    /**
     * @description The name of the dedicated Logstore that is used to store NAS operation logs.
     *
     * @example nas-nfs
     *
     * @var string
     */
    public $logstore;

    /**
     * @description The name of the project where the dedicated Logstore resides.
     *
     * @example nas-1746495857602745-cn-hangzhou
     *
     * @var string
     */
    public $project;

    /**
     * @description The region where the dedicated Logstore resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The role that is used by NAS to access Simple Log Service.
     *
     * @example acs:ram::162165525211xxxx:role/aliyunnaslogarchiverole
     *
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'logstore' => 'Logstore',
        'project'  => 'Project',
        'region'   => 'Region',
        'roleArn'  => 'RoleArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
