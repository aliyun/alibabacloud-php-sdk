<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyWuyingServerSpecResponseBody\modifyWuyingServerSpecModel;

class ModifyWuyingServerSpecResponseBody extends Model
{
    /**
     * @var modifyWuyingServerSpecModel
     */
    public $modifyWuyingServerSpecModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modifyWuyingServerSpecModel' => 'ModifyWuyingServerSpecModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->modifyWuyingServerSpecModel) {
            $this->modifyWuyingServerSpecModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifyWuyingServerSpecModel) {
            $res['ModifyWuyingServerSpecModel'] = null !== $this->modifyWuyingServerSpecModel ? $this->modifyWuyingServerSpecModel->toArray($noStream) : $this->modifyWuyingServerSpecModel;
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
        if (isset($map['ModifyWuyingServerSpecModel'])) {
            $model->modifyWuyingServerSpecModel = modifyWuyingServerSpecModel::fromMap($map['ModifyWuyingServerSpecModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
