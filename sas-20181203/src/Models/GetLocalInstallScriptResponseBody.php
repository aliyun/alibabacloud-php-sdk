<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetLocalInstallScriptResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $script;
    protected $_name = [
        'requestId' => 'RequestId',
        'script'    => 'Script',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
