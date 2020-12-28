<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyImageGatewayConfigRequest\repo;
use AlibabaCloud\Tea\Model;

class ModifyImageGatewayConfigRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBUsername;

    /**
     * @var string
     */
    public $DBPassword;

    /**
     * @var string
     */
    public $DBServerInfo;

    /**
     * @var string
     */
    public $defaultRepoLocation;

    /**
     * @var int
     */
    public $pullUpdateTimeout;

    /**
     * @var string
     */
    public $imageExpirationTimeout;

    /**
     * @var repo[]
     */
    public $repo;
    protected $_name = [
        'clusterId'              => 'ClusterId',
        'DBType'                 => 'DBType',
        'DBUsername'             => 'DBUsername',
        'DBPassword'             => 'DBPassword',
        'DBServerInfo'           => 'DBServerInfo',
        'defaultRepoLocation'    => 'DefaultRepoLocation',
        'pullUpdateTimeout'      => 'PullUpdateTimeout',
        'imageExpirationTimeout' => 'ImageExpirationTimeout',
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
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBUsername) {
            $res['DBUsername'] = $this->DBUsername;
        }
        if (null !== $this->DBPassword) {
            $res['DBPassword'] = $this->DBPassword;
        }
        if (null !== $this->DBServerInfo) {
            $res['DBServerInfo'] = $this->DBServerInfo;
        }
        if (null !== $this->defaultRepoLocation) {
            $res['DefaultRepoLocation'] = $this->defaultRepoLocation;
        }
        if (null !== $this->pullUpdateTimeout) {
            $res['PullUpdateTimeout'] = $this->pullUpdateTimeout;
        }
        if (null !== $this->imageExpirationTimeout) {
            $res['ImageExpirationTimeout'] = $this->imageExpirationTimeout;
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
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBUsername'])) {
            $model->DBUsername = $map['DBUsername'];
        }
        if (isset($map['DBPassword'])) {
            $model->DBPassword = $map['DBPassword'];
        }
        if (isset($map['DBServerInfo'])) {
            $model->DBServerInfo = $map['DBServerInfo'];
        }
        if (isset($map['DefaultRepoLocation'])) {
            $model->defaultRepoLocation = $map['DefaultRepoLocation'];
        }
        if (isset($map['PullUpdateTimeout'])) {
            $model->pullUpdateTimeout = $map['PullUpdateTimeout'];
        }
        if (isset($map['ImageExpirationTimeout'])) {
            $model->imageExpirationTimeout = $map['ImageExpirationTimeout'];
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
