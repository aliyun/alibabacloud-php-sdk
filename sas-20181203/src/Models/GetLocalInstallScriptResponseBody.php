<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetLocalInstallScriptResponseBody extends Model
{
    /**
     * @var string
     */
    public $script;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'script'    => 'Script',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLocalInstallScriptResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
