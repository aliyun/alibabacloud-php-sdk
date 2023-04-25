<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListAudioFilesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example test-file.wav
     *
     * @var string
     */
    public $audioFileName;

    /**
     * @example d5cd7a94-3b6a-47d2-b7fd-0b1cd839bf77
     *
     * @var string
     */
    public $audioResourceId;

    /**
     * @example 2021-03-05 17:35:45.0
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example ccc-test/test-file.wav
     *
     * @var string
     */
    public $ossFileKey;

    /**
     * @example 2021-03-08 15:34:49.0
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'audioFileName'   => 'AudioFileName',
        'audioResourceId' => 'AudioResourceId',
        'createdTime'     => 'CreatedTime',
        'instanceId'      => 'InstanceId',
        'name'            => 'Name',
        'ossFileKey'      => 'OssFileKey',
        'updatedTime'     => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFileName) {
            $res['AudioFileName'] = $this->audioFileName;
        }
        if (null !== $this->audioResourceId) {
            $res['AudioResourceId'] = $this->audioResourceId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossFileKey) {
            $res['OssFileKey'] = $this->ossFileKey;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFileName'])) {
            $model->audioFileName = $map['AudioFileName'];
        }
        if (isset($map['AudioResourceId'])) {
            $model->audioResourceId = $map['AudioResourceId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssFileKey'])) {
            $model->ossFileKey = $map['OssFileKey'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
