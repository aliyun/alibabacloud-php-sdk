<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class InstanceMetadataOptions extends Model
{
    /**
     * @example optional
     *
     * @var string
     */
    public $httpTokens;
    protected $_name = [
        'httpTokens' => 'http_tokens',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpTokens) {
            $res['http_tokens'] = $this->httpTokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstanceMetadataOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['http_tokens'])) {
            $model->httpTokens = $map['http_tokens'];
        }

        return $model;
    }
}
