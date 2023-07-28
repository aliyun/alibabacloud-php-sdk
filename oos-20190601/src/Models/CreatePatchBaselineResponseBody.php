<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\CreatePatchBaselineResponseBody\patchBaseline;
use AlibabaCloud\Tea\Model;

class CreatePatchBaselineResponseBody extends Model
{
    /**
     * @description The details of the patch baseline.
     *
     * @var patchBaseline
     */
    public $patchBaseline;

    /**
     * @description The ID of the request.
     *
     * @example A5173FF6-D10D-5E8C-8F71-943C2A3E25C0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'patchBaseline' => 'PatchBaseline',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->patchBaseline) {
            $res['PatchBaseline'] = null !== $this->patchBaseline ? $this->patchBaseline->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePatchBaselineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PatchBaseline'])) {
            $model->patchBaseline = patchBaseline::fromMap($map['PatchBaseline']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
