<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class DeleteTagRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description This parameter is required.
     *
     * @example 609633ffd40eb063bac8165a
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @example v1.0
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'organizationId' => 'organizationId',
        'tagName'        => 'tagName',
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
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        return $model;
    }
}
