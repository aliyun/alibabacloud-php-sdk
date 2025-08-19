<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class InstanceMetadataOptions extends Model
{
    /**
     * @var string
     */
    public $httpTokens;
    protected $_name = [
        'httpTokens' => 'http_tokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpTokens) {
            $res['http_tokens'] = $this->httpTokens;
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
        if (isset($map['http_tokens'])) {
            $model->httpTokens = $map['http_tokens'];
        }

        return $model;
    }
}
