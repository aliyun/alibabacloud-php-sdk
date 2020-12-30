<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeApplicationsResponseBody\applications;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var int
     */
    public $totalEnvs;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $updateUsername;

    /**
     * @var int
     */
    public $runningEnvs;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $usingSharedStorage;

    /**
     * @var string
     */
    public $createUsername;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $terminatedEnvs;

    /**
     * @var string
     */
    public $appDescription;
    protected $_name = [
        'totalEnvs'          => 'TotalEnvs',
        'updateTime'         => 'UpdateTime',
        'updateUsername'     => 'UpdateUsername',
        'runningEnvs'        => 'RunningEnvs',
        'createTime'         => 'CreateTime',
        'categoryName'       => 'CategoryName',
        'usingSharedStorage' => 'UsingSharedStorage',
        'createUsername'     => 'CreateUsername',
        'appName'            => 'AppName',
        'appId'              => 'AppId',
        'terminatedEnvs'     => 'TerminatedEnvs',
        'appDescription'     => 'AppDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalEnvs) {
            $res['TotalEnvs'] = $this->totalEnvs;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateUsername) {
            $res['UpdateUsername'] = $this->updateUsername;
        }
        if (null !== $this->runningEnvs) {
            $res['RunningEnvs'] = $this->runningEnvs;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->usingSharedStorage) {
            $res['UsingSharedStorage'] = $this->usingSharedStorage;
        }
        if (null !== $this->createUsername) {
            $res['CreateUsername'] = $this->createUsername;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->terminatedEnvs) {
            $res['TerminatedEnvs'] = $this->terminatedEnvs;
        }
        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
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
        if (isset($map['TotalEnvs'])) {
            $model->totalEnvs = $map['TotalEnvs'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateUsername'])) {
            $model->updateUsername = $map['UpdateUsername'];
        }
        if (isset($map['RunningEnvs'])) {
            $model->runningEnvs = $map['RunningEnvs'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['UsingSharedStorage'])) {
            $model->usingSharedStorage = $map['UsingSharedStorage'];
        }
        if (isset($map['CreateUsername'])) {
            $model->createUsername = $map['CreateUsername'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['TerminatedEnvs'])) {
            $model->terminatedEnvs = $map['TerminatedEnvs'];
        }
        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }

        return $model;
    }
}
