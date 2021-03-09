<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetIdpMetadataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $idpEntityId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'idpEntityId' => 'IdpEntityId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('idpEntityId', $this->idpEntityId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->idpEntityId) {
            $res['IdpEntityId'] = $this->idpEntityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetIdpMetadataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IdpEntityId'])) {
            $model->idpEntityId = $map['IdpEntityId'];
        }

        return $model;
    }
}
