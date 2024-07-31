<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody\extension;
use AlibabaCloud\Tea\Model;

class GetExtensionResponseBody extends Model
{
    /**
     * @description The details of the extension.
     *
     * @var extension
     */
    public $extension;

    /**
     * @description The request ID. You can use the request ID to query logs and troubleshoot issues.
     *
     * @example 0000-ABCD-EFG
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'extension' => 'Extension',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = null !== $this->extension ? $this->extension->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExtensionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = extension::fromMap($map['Extension']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
