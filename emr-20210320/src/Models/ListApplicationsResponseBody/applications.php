<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListApplicationsResponseBody;

use AlibabaCloud\Dara\Model;

class applications extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $applicationState;

    /**
     * @var string
     */
    public $applicationVersion;

    /**
     * @var string
     */
    public $communityVersion;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'applicationState' => 'ApplicationState',
        'applicationVersion' => 'ApplicationVersion',
        'communityVersion' => 'CommunityVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
