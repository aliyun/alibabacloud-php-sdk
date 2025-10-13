<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerEipInfoResponseBody\eipInfoModel;

class DescribeWuyingServerEipInfoResponseBody extends Model
{
    /**
     * @var eipInfoModel
     */
    public $eipInfoModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eipInfoModel' => 'EipInfoModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->eipInfoModel) {
            $this->eipInfoModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipInfoModel) {
            $res['EipInfoModel'] = null !== $this->eipInfoModel ? $this->eipInfoModel->toArray($noStream) : $this->eipInfoModel;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EipInfoModel'])) {
            $model->eipInfoModel = eipInfoModel::fromMap($map['EipInfoModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
