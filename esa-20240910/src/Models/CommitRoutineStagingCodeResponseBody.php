<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CommitRoutineStagingCodeResponseBody extends Model
{
    /**
     * @description The version number of the newly generated code.
     *
     * @example 1710120201067203242
     *
     * @var string
     */
    public $codeVersion;

    /**
     * @description The request ID.
     *
     * @example EDBD3EB3-97DA-5465-AEF5-8DCA5DC5E395
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'codeVersion' => 'CodeVersion',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommitRoutineStagingCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
