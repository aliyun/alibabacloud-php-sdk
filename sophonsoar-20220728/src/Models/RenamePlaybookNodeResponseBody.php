<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class RenamePlaybookNodeResponseBody extends Model
{
    /**
     * @description The returned new name of the node.
     *
     * @example waf_process
     *
     * @var string
     */
    public $renameResult;

    /**
     * @description The request ID.
     *
     * @example 1E1EC464-3BD7-518F-9937-BCC12E6855FE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'renameResult' => 'RenameResult',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renameResult) {
            $res['RenameResult'] = $this->renameResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenamePlaybookNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenameResult'])) {
            $model->renameResult = $map['RenameResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
