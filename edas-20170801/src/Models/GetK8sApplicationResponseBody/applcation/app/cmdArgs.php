<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app;

use AlibabaCloud\Tea\Model;

class cmdArgs extends Model
{
    /**
     * @var string[]
     */
    public $cmdArg;
    protected $_name = [
        'cmdArg' => 'CmdArg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmdArg) {
            $res['CmdArg'] = $this->cmdArg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cmdArgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CmdArg'])) {
            if (!empty($map['CmdArg'])) {
                $model->cmdArg = $map['CmdArg'];
            }
        }

        return $model;
    }
}
