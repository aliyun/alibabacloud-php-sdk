<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateAScriptsResponseBody;

use AlibabaCloud\Dara\Model;

class AScriptIds extends Model
{
    /**
     * @var string
     */
    public $AScriptId;
    protected $_name = [
        'AScriptId' => 'AScriptId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AScriptId) {
            $res['AScriptId'] = $this->AScriptId;
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
        if (isset($map['AScriptId'])) {
            $model->AScriptId = $map['AScriptId'];
        }

        return $model;
    }
}
