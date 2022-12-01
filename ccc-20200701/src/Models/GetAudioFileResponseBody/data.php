<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetAudioFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $audioFileName;

    /**
     * @var string
     */
    public $audioResourceId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossFileKey;

    /**
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
     * @return data
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
