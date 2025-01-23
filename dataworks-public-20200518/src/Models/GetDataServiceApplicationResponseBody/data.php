<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $applicationCode;
    /**
     * @var int
     */
    public $applicationId;
    /**
     * @var string
     */
    public $applicationKey;
    /**
     * @var string
     */
    public $applicationName;
    /**
     * @var string
     */
    public $applicationSecret;
    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'applicationCode'   => 'ApplicationCode',
        'applicationId'     => 'ApplicationId',
        'applicationKey'    => 'ApplicationKey',
        'applicationName'   => 'ApplicationName',
        'applicationSecret' => 'ApplicationSecret',
        'projectId'         => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationKey) {
            $res['ApplicationKey'] = $this->applicationKey;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->applicationSecret) {
            $res['ApplicationSecret'] = $this->applicationSecret;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationKey'])) {
            $model->applicationKey = $map['ApplicationKey'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ApplicationSecret'])) {
            $model->applicationSecret = $map['ApplicationSecret'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
