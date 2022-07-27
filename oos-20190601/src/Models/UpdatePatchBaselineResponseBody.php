<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\UpdatePatchBaselineResponseBody\patchBaseline;
use AlibabaCloud\Tea\Model;

class UpdatePatchBaselineResponseBody extends Model
{
    /**
     * @var patchBaseline
     */
    public $patchBaseline;

    /**
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
     * @return UpdatePatchBaselineResponseBody
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
