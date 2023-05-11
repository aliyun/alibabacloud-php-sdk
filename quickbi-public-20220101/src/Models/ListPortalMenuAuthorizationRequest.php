<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListPortalMenuAuthorizationRequest extends Model
{
    /**
     * @description The ID of the BI portal.
     *
     * @example 0d173abb53e84c8ca7495429163b****
     *
     * @var string
     */
    public $dataPortalId;
    protected $_name = [
        'dataPortalId' => 'DataPortalId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPortalId) {
            $res['DataPortalId'] = $this->dataPortalId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPortalMenuAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPortalId'])) {
            $model->dataPortalId = $map['DataPortalId'];
        }

        return $model;
    }
}
