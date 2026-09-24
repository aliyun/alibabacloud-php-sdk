<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class InvokeEsRequestRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $path;

    /**
     * @var bool
     */
    public $system;
    protected $_name = [
        'body' => 'body',
        'credentialId' => 'credentialId',
        'method' => 'method',
        'path' => 'path',
        'system' => 'system',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->system) {
            $res['system'] = $this->system;
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['system'])) {
            $model->system = $map['system'];
        }

        return $model;
    }
}
