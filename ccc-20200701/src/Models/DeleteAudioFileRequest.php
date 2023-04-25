<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class DeleteAudioFileRequest extends Model
{
    /**
     * @example d5cd7a94-3b6a-47d2-b7fd-0b1cd839bf77
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
    protected $_name = [
        'audioResourceId' => 'AudioResourceId',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioResourceId) {
            $res['AudioResourceId'] = $this->audioResourceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAudioFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioResourceId'])) {
            $model->audioResourceId = $map['AudioResourceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
