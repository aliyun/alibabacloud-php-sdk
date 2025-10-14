<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BuildAICoachScriptRecordRequest extends Model
{
    /**
     * @var string
     */
    public $scriptJsonUrl;
    protected $_name = [
        'scriptJsonUrl' => 'scriptJsonUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scriptJsonUrl) {
            $res['scriptJsonUrl'] = $this->scriptJsonUrl;
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
        if (isset($map['scriptJsonUrl'])) {
            $model->scriptJsonUrl = $map['scriptJsonUrl'];
        }

        return $model;
    }
}
