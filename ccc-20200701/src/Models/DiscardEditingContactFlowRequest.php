<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class DiscardEditingContactFlowRequest extends Model
{
    /**
     * @example 3ff4e021-fd63-4572-ad8c-10ed69972965
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @example 0aa493d6-58eb-4290-9ba2-e1c2c615b46b
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
     * @return DiscardEditingContactFlowRequest
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
