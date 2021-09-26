<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string
     */
    public $applicationKey;

    /**
     * @var string
     */
    public $applicationSecret;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var int
     */
    public $applicationId;
    protected $_name = [
        'applicationCode'   => 'ApplicationCode',
        'applicationKey'    => 'ApplicationKey',
        'applicationSecret' => 'ApplicationSecret',
        'projectId'         => 'ProjectId',
        'applicationName'   => 'ApplicationName',
        'applicationId'     => 'ApplicationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }
        if (null !== $this->applicationKey) {
            $res['ApplicationKey'] = $this->applicationKey;
        }
        if (null !== $this->applicationSecret) {
            $res['ApplicationSecret'] = $this->applicationSecret;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }
        if (isset($map['ApplicationKey'])) {
            $model->applicationKey = $map['ApplicationKey'];
        }
        if (isset($map['ApplicationSecret'])) {
            $model->applicationSecret = $map['ApplicationSecret'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        return $model;
    }
}
