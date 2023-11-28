<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdatePublicWhiteIpsRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @description The ID of the request.
     *
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The results that are returned.
     *
     * @example Cover
     *
     * @var string
     */
    public $modifyMode;
    protected $_name = [
        'body'        => 'body',
        'clientToken' => 'clientToken',
        'modifyMode'  => 'modifyMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->modifyMode) {
            $res['modifyMode'] = $this->modifyMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePublicWhiteIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['modifyMode'])) {
            $model->modifyMode = $map['modifyMode'];
        }

        return $model;
    }
}
