<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListRepositoryCommitDiffRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var int
     */
    public $contextLine;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'contextLine'    => 'contextLine',
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
        if (null !== $this->contextLine) {
            $res['contextLine'] = $this->contextLine;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepositoryCommitDiffRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['contextLine'])) {
            $model->contextLine = $map['contextLine'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
