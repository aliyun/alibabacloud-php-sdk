<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class GetApplicationTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @var string
     */
    public $builtInApplicationActionType;
    protected $_name = [
        'applicationTemplateId' => 'ApplicationTemplateId',
        'builtInApplicationActionType' => 'BuiltInApplicationActionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
        }

        if (null !== $this->builtInApplicationActionType) {
            $res['BuiltInApplicationActionType'] = $this->builtInApplicationActionType;
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
        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
        }

        if (isset($map['BuiltInApplicationActionType'])) {
            $model->builtInApplicationActionType = $map['BuiltInApplicationActionType'];
        }

        return $model;
    }
}
