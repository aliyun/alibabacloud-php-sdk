<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ModifyAudioFileRequest extends Model
{
    /**
     * @example new-test-file.wav
     *
     * @var string
     */
    public $audioFileName;

    /**
     * @example acc300c4-75c9-41ba-ba5e-2a365c96c248
     *
     * @var string
     */
    public $audioResourceId;

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
     * @example ccc-test/new-test-file.wav
     *
     * @var string
     */
    public $ossFileKey;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'audioFileName'   => 'AudioFileName',
        'audioResourceId' => 'AudioResourceId',
        'instanceId'      => 'InstanceId',
        'name'            => 'Name',
        'ossFileKey'      => 'OssFileKey',
        'usage'           => 'Usage',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossFileKey) {
            $res['OssFileKey'] = $this->ossFileKey;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAudioFileRequest
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssFileKey'])) {
            $model->ossFileKey = $map['OssFileKey'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
