<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;

class DeleteWaterMarkTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $waterMarkTemplateId;
    protected $_name = [
        'requestId' => 'RequestId',
        'waterMarkTemplateId' => 'WaterMarkTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->waterMarkTemplateId) {
            $res['WaterMarkTemplateId'] = $this->waterMarkTemplateId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WaterMarkTemplateId'])) {
            $model->waterMarkTemplateId = $map['WaterMarkTemplateId'];
        }

        return $model;
    }
}
