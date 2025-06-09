<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetMLServiceResultsRequest extends Model
{
    /**
     * @var bool
     */
    public $allowBuiltin;

    /**
     * @var MLServiceAnalysisParam
     */
    public $body;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'allowBuiltin' => 'allowBuiltin',
        'body' => 'body',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowBuiltin) {
            $res['allowBuiltin'] = $this->allowBuiltin;
        }

        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['allowBuiltin'])) {
            $model->allowBuiltin = $map['allowBuiltin'];
        }

        if (isset($map['body'])) {
            $model->body = MLServiceAnalysisParam::fromMap($map['body']);
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
