<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class GetAudioFileUploadParametersRequest extends Model
{
    /**
     * @var string
     */
    public $audioFileName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'audioFileName' => 'AudioFileName',
        'instanceId'    => 'InstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAudioFileUploadParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFileName'])) {
            $model->audioFileName = $map['AudioFileName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
