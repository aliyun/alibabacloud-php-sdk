<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataDownloadURLRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $dataName;

    /**
     * @var string
     */
    public $dataVersion;

    /**
     * @var int
     */
    public $expireTimeout;

    /**
     * @var string
     */
    public $serverFilterStrategy;
    protected $_name = [
        'appId'                => 'AppId',
        'dataName'             => 'DataName',
        'dataVersion'          => 'DataVersion',
        'expireTimeout'        => 'ExpireTimeout',
        'serverFilterStrategy' => 'ServerFilterStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }
        if (null !== $this->dataVersion) {
            $res['DataVersion'] = $this->dataVersion;
        }
        if (null !== $this->expireTimeout) {
            $res['ExpireTimeout'] = $this->expireTimeout;
        }
        if (null !== $this->serverFilterStrategy) {
            $res['ServerFilterStrategy'] = $this->serverFilterStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataDownloadURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }
        if (isset($map['DataVersion'])) {
            $model->dataVersion = $map['DataVersion'];
        }
        if (isset($map['ExpireTimeout'])) {
            $model->expireTimeout = $map['ExpireTimeout'];
        }
        if (isset($map['ServerFilterStrategy'])) {
            $model->serverFilterStrategy = $map['ServerFilterStrategy'];
        }

        return $model;
    }
}
