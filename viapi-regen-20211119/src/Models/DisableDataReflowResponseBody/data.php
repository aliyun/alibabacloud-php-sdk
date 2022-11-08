<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\DisableDataReflowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $enableDataReflowFlag;

    /**
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'enableDataReflowFlag' => 'EnableDataReflowFlag',
        'serviceId'            => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableDataReflowFlag) {
            $res['EnableDataReflowFlag'] = $this->enableDataReflowFlag;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
        if (isset($map['EnableDataReflowFlag'])) {
            $model->enableDataReflowFlag = $map['EnableDataReflowFlag'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
