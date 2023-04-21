<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetIdpMetadataResponseBody extends Model
{
    /**
     * @description The entityID value obtained after the IdP metadata file is parsed.
     *
     * @example http://test****.cn/adfs/services/trust
     *
     * @var string
     */
    public $idpEntityId;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'idpEntityId' => 'IdpEntityId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idpEntityId) {
            $res['IdpEntityId'] = $this->idpEntityId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetIdpMetadataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdpEntityId'])) {
            $model->idpEntityId = $map['IdpEntityId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
