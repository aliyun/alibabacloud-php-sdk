<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The AppCode for simple authentication. You can select simple authentication or signature authentication when you call an API operation.
     *
     * @example CODE123
     *
     * @var string
     */
    public $applicationCode;

    /**
     * @description The ID of the application.
     *
     * @example 10000
     *
     * @var int
     */
    public $applicationId;

    /**
     * @description The AppKey for signature authentication. You can select simple authentication or signature authentication when you call an API operation.
     *
     * @example KEY123
     *
     * @var string
     */
    public $applicationKey;

    /**
     * @description The name of the application.
     *
     * @example Test application
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The AppSecret for signature authentication. You can select simple authentication or signature authentication when you call an API operation.
     *
     * @example SECRET123
     *
     * @var string
     */
    public $applicationSecret;

    /**
     * @description The ID of the workspace.
     *
     * @example 10001
     *
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
    }

    public function toMap()
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
