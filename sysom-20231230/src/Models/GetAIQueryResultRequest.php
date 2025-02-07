<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetAIQueryResultRequest extends Model
{
    /**
     * @var string
     */
    public $analysisId;
    protected $_name = [
        'analysisId' => 'analysisId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisId) {
            $res['analysisId'] = $this->analysisId;
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
        if (isset($map['analysisId'])) {
            $model->analysisId = $map['analysisId'];
        }

        return $model;
    }
}
