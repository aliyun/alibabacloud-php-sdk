<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyImageGatewayConfigRequest\repo;
use AlibabaCloud\Tea\Model;

class ModifyImageGatewayConfigRequest extends Model
{
    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 13****
     *
     * @var string
     */
    public $DBPassword;

    /**
     * @example dds-uf6628e4287716b433270.mongodb.rds.aliyuncs.com:3717/admin
     *
     * @var string
     */
    public $DBServerInfo;

    /**
     * @example mongodb
     *
     * @var string
     */
    public $DBType;

    /**
     * @example root
     *
     * @var string
     */
    public $DBUsername;

    /**
     * @example registry-1.docker.io
     *
     * @var string
     */
    public $defaultRepoLocation;

    /**
     * @example 12:00:00
     *
     * @var string
     */
    public $imageExpirationTimeout;

    /**
     * @example 300
     *
     * @var int
     */
    public $pullUpdateTimeout;

    /**
     * @var repo[]
     */
    public $repo;
    protected $_name = [
        'clusterId'              => 'ClusterId',
        'DBPassword'             => 'DBPassword',
        'DBServerInfo'           => 'DBServerInfo',
        'DBType'                 => 'DBType',
        'DBUsername'             => 'DBUsername',
        'defaultRepoLocation'    => 'DefaultRepoLocation',
        'imageExpirationTimeout' => 'ImageExpirationTimeout',
        'pullUpdateTimeout'      => 'PullUpdateTimeout',
        'repo'                   => 'Repo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->DBPassword) {
            $res['DBPassword'] = $this->DBPassword;
        }
        if (null !== $this->DBServerInfo) {
            $res['DBServerInfo'] = $this->DBServerInfo;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBUsername) {
            $res['DBUsername'] = $this->DBUsername;
        }
        if (null !== $this->defaultRepoLocation) {
            $res['DefaultRepoLocation'] = $this->defaultRepoLocation;
        }
        if (null !== $this->imageExpirationTimeout) {
            $res['ImageExpirationTimeout'] = $this->imageExpirationTimeout;
        }
        if (null !== $this->pullUpdateTimeout) {
            $res['PullUpdateTimeout'] = $this->pullUpdateTimeout;
        }
        if (null !== $this->repo) {
            $res['Repo'] = [];
            if (null !== $this->repo && \is_array($this->repo)) {
                $n = 0;
                foreach ($this->repo as $item) {
                    $res['Repo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyImageGatewayConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DBPassword'])) {
            $model->DBPassword = $map['DBPassword'];
        }
        if (isset($map['DBServerInfo'])) {
            $model->DBServerInfo = $map['DBServerInfo'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBUsername'])) {
            $model->DBUsername = $map['DBUsername'];
        }
        if (isset($map['DefaultRepoLocation'])) {
            $model->defaultRepoLocation = $map['DefaultRepoLocation'];
        }
        if (isset($map['ImageExpirationTimeout'])) {
            $model->imageExpirationTimeout = $map['ImageExpirationTimeout'];
        }
        if (isset($map['PullUpdateTimeout'])) {
            $model->pullUpdateTimeout = $map['PullUpdateTimeout'];
        }
        if (isset($map['Repo'])) {
            if (!empty($map['Repo'])) {
                $model->repo = [];
                $n           = 0;
                foreach ($map['Repo'] as $item) {
                    $model->repo[$n++] = null !== $item ? repo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
