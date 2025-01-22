<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdatePublicPatchBaselineResponseBody\patchBaseline;

class UpdatePublicPatchBaselineResponseBody extends Model
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
        if (null !== $this->patchBaseline) {
            $this->patchBaseline->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->patchBaseline) {
            $res['PatchBaseline'] = null !== $this->patchBaseline ? $this->patchBaseline->toArray($noStream) : $this->patchBaseline;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
