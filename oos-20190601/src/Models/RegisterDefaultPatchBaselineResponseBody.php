<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\RegisterDefaultPatchBaselineResponseBody\patchBaseline;
use AlibabaCloud\Tea\Model;

class RegisterDefaultPatchBaselineResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var patchBaseline
     */
    public $patchBaseline;
    protected $_name = [
        'requestId'     => 'RequestId',
        'patchBaseline' => 'PatchBaseline',
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
        if (null !== $this->patchBaseline) {
            $res['PatchBaseline'] = null !== $this->patchBaseline ? $this->patchBaseline->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterDefaultPatchBaselineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PatchBaseline'])) {
            $model->patchBaseline = patchBaseline::fromMap($map['PatchBaseline']);
        }

        return $model;
    }
}
