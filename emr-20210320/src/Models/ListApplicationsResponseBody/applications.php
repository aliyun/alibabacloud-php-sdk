<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListApplicationsResponseBody;

use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @description The application name.
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The status of the application operation.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $applicationState;

    /**
     * @description The version of the application.
     *
     * @example 2.8.1
     *
     * @deprecated
     *
     * @var string
     */
    public $applicationVersion;

    /**
     * @description The community edition.
     *
     * @example 2.8.5
     *
     * @var string
     */
    public $communityVersion;
    protected $_name = [
        'applicationName'    => 'ApplicationName',
        'applicationState'   => 'ApplicationState',
        'applicationVersion' => 'ApplicationVersion',
        'communityVersion'   => 'CommunityVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->applicationState) {
            $res['ApplicationState'] = $this->applicationState;
        }
        if (null !== $this->applicationVersion) {
            $res['ApplicationVersion'] = $this->applicationVersion;
        }
        if (null !== $this->communityVersion) {
            $res['CommunityVersion'] = $this->communityVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ApplicationState'])) {
            $model->applicationState = $map['ApplicationState'];
        }
        if (isset($map['ApplicationVersion'])) {
            $model->applicationVersion = $map['ApplicationVersion'];
        }
        if (isset($map['CommunityVersion'])) {
            $model->communityVersion = $map['CommunityVersion'];
        }

        return $model;
    }
}
