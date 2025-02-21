<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions;

class application extends Model
{
    /**
     * @var actions[]
     */
    public $actions;
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
        'actions'            => 'Actions',
        'applicationName'    => 'ApplicationName',
        'applicationState'   => 'ApplicationState',
        'applicationVersion' => 'ApplicationVersion',
        'communityVersion'   => 'CommunityVersion',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['Actions'] = [];
                $n1             = 0;
                foreach ($this->actions as $item1) {
                    $res['Actions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

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
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n1             = 0;
                foreach ($map['Actions'] as $item1) {
                    $model->actions[$n1++] = actions::fromMap($item1);
                }
            }
        }

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
