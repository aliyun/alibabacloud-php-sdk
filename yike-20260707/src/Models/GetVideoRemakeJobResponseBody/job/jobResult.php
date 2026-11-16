<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoRemakeJobResponseBody\job;

use AlibabaCloud\Dara\Model;

class jobResult extends Model
{
    /**
     * @var string
     */
    public $aiResult;

    /**
     * @var string
     */
    public $script;
    protected $_name = [
        'aiResult' => 'AiResult',
        'script' => 'Script',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiResult) {
            $res['AiResult'] = $this->aiResult;
        }

        if (null !== $this->script) {
            $res['Script'] = $this->script;
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
        if (isset($map['AiResult'])) {
            $model->aiResult = $map['AiResult'];
        }

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
