<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801\Models;

use AlibabaCloud\Tea\Model;

class GetScriptRequest extends Model
{
    /**
     * @var int
     */
    public $scriptId;

    /**
     * @var string
     */
    public $tfsname;
    protected $_name = [
        'scriptId' => 'ScriptId',
        'tfsname'  => 'Tfsname',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->tfsname) {
            $res['Tfsname'] = $this->tfsname;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['Tfsname'])) {
            $model->tfsname = $map['Tfsname'];
        }

        return $model;
    }
}
