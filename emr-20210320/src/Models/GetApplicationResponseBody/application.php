<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions;
use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description 操作列表。
     *
     * @var actions[]
     */
    public $actions;

    /**
     * @description 应用名称。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 应用操作状态。
     *
     * @example RUNNING
     *
     * @var string
     */
    public $applicationState;

    /**
     * @description 应用版本。
     *
     * @example 2.8.1
     *
     * @var string
     */
    public $applicationVersion;

    /**
     * @description 社区版本。
     *
     * @example 2.8.1
     *
     * @var string
     */
    public $communityVersion;
    protected $_name = [
        'actions' => 'Actions',
        'applicationName' => 'ApplicationName',
        'applicationState' => 'ApplicationState',
        'applicationVersion' => 'ApplicationVersion',
        'communityVersion' => 'CommunityVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['Actions'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n = 0;
                foreach ($map['Actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
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
