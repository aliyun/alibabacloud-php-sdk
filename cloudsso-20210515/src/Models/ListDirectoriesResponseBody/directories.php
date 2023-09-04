<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListDirectoriesResponseBody;

use AlibabaCloud\Tea\Model;

class directories extends Model
{
    /**
     * @description The time when the directory was created.
     *
     * @example 2021-06-30T08:35:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The name of the directory.
     *
     * @example new-example
     *
     * @var string
     */
    public $directoryName;

    /**
     * @description The region ID of the directory.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The time when the directory was modified.
     *
     * @example 2021-10-25T09:13:24Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'directoryId'   => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'region'        => 'Region',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
