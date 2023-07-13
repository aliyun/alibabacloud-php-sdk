<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetThingScriptResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the script. Valid values:
     *
     *   JavaScript
     *   Python\_27: Python 2.7
     *   PHP\_72: PHP 7.2
     *
     * @example JavaScript
     *
     * @var string
     */
    public $scriptType;

    /**
     * @description The URL of the script payload.
     *
     * @example http://***
     *
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
