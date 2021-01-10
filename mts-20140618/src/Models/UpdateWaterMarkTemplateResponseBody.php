<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateWaterMarkTemplateResponseBody\waterMarkTemplate;
use AlibabaCloud\Tea\Model;

class UpdateWaterMarkTemplateResponseBody extends Model
{
    /**
     * @var waterMarkTemplate
     */
    public $waterMarkTemplate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'waterMarkTemplate' => 'WaterMarkTemplate',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->waterMarkTemplate) {
            $res['WaterMarkTemplate'] = null !== $this->waterMarkTemplate ? $this->waterMarkTemplate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWaterMarkTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WaterMarkTemplate'])) {
            $model->waterMarkTemplate = waterMarkTemplate::fromMap($map['WaterMarkTemplate']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
