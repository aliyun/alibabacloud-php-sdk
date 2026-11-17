<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\TrialDialogueResponseBody\data;

use AlibabaCloud\Dara\Model;

class extras extends Model
{
    /**
     * @var string
     */
    public $debugInfo;
    protected $_name = [
        'debugInfo' => 'DebugInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->debugInfo) {
            $res['DebugInfo'] = $this->debugInfo;
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
        if (isset($map['DebugInfo'])) {
            $model->debugInfo = $map['DebugInfo'];
        }

        return $model;
    }
}
