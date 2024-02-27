<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengverifyagent\V20240131\Models;

use AlibabaCloud\Tea\Model;

class CreateRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $packName;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $schemeName;

    /**
     * @var string
     */
    public $signName;
    protected $_name = [
        'appName'    => 'appName',
        'bundleId'   => 'bundleId',
        'packName'   => 'packName',
        'platform'   => 'platform',
        'schemeName' => 'schemeName',
        'signName'   => 'signName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->bundleId) {
            $res['bundleId'] = $this->bundleId;
        }
        if (null !== $this->packName) {
            $res['packName'] = $this->packName;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }
        if (null !== $this->schemeName) {
            $res['schemeName'] = $this->schemeName;
        }
        if (null !== $this->signName) {
            $res['signName'] = $this->signName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['bundleId'])) {
            $model->bundleId = $map['bundleId'];
        }
        if (isset($map['packName'])) {
            $model->packName = $map['packName'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }
        if (isset($map['schemeName'])) {
            $model->schemeName = $map['schemeName'];
        }
        if (isset($map['signName'])) {
            $model->signName = $map['signName'];
        }

        return $model;
    }
}
