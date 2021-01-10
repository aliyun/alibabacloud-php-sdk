<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetThingScriptResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $scriptType;

    /**
     * @var string
     */
    public $scriptUrl;
    protected $_name = [
        'scriptType' => 'ScriptType',
        'scriptUrl'  => 'ScriptUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scriptType) {
            $res['ScriptType'] = $this->scriptType;
        }
        if (null !== $this->scriptUrl) {
            $res['ScriptUrl'] = $this->scriptUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScriptType'])) {
            $model->scriptType = $map['ScriptType'];
        }
        if (isset($map['ScriptUrl'])) {
            $model->scriptUrl = $map['ScriptUrl'];
        }

        return $model;
    }
}
