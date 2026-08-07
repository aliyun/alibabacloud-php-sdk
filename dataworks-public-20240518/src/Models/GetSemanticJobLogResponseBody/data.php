<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetSemanticJobLogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $logContent;

    /**
     * @var bool
     */
    public $logEnd;
    protected $_name = [
        'logContent' => 'LogContent',
        'logEnd' => 'LogEnd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logContent) {
            $res['LogContent'] = $this->logContent;
        }

        if (null !== $this->logEnd) {
            $res['LogEnd'] = $this->logEnd;
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
        if (isset($map['LogContent'])) {
            $model->logContent = $map['LogContent'];
        }

        if (isset($map['LogEnd'])) {
            $model->logEnd = $map['LogEnd'];
        }

        return $model;
    }
}
