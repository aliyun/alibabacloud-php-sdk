<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class GetContactFlowRequest extends Model
{
    /**
     * @example 274601be-a6d5-4429-bcef-32b51d031c6e
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @example 566399d7-5558-447c-a72f-9be2768b6a82
     *
     * @var string
     */
    public $draftId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactFlowId' => 'ContactFlowId',
        'draftId'       => 'DraftId',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetContactFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
