<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetRepositoryRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'identity'       => 'identity',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->identity) {
            $res['identity'] = $this->identity;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepositoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['identity'])) {
            $model->identity = $map['identity'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
