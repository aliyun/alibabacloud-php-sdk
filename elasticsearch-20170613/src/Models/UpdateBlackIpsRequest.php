<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateBlackIpsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $esIPBlacklist;
    protected $_name = [
        'clientToken'   => 'clientToken',
        'esIPBlacklist' => 'esIPBlacklist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->esIPBlacklist) {
            $res['esIPBlacklist'] = $this->esIPBlacklist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBlackIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['esIPBlacklist'])) {
            if (!empty($map['esIPBlacklist'])) {
                $model->esIPBlacklist = $map['esIPBlacklist'];
            }
        }

        return $model;
    }
}
