<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateCodeBundleResponseBody;

use AlibabaCloud\Dara\Model;

class upload extends Model
{
    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $putUrl;

    /**
     * @var string
     */
    public $requiredContentType;
    protected $_name = [
        'expiresAt' => 'expiresAt',
        'method' => 'method',
        'putUrl' => 'putUrl',
        'requiredContentType' => 'requiredContentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->putUrl) {
            $res['putUrl'] = $this->putUrl;
        }

        if (null !== $this->requiredContentType) {
            $res['requiredContentType'] = $this->requiredContentType;
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
        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['putUrl'])) {
            $model->putUrl = $map['putUrl'];
        }

        if (isset($map['requiredContentType'])) {
            $model->requiredContentType = $map['requiredContentType'];
        }

        return $model;
    }
}
