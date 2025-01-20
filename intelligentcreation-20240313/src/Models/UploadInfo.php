<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class UploadInfo extends Model
{
    /**
     * @var string
     */
    public $accessId;
    /**
     * @var string
     */
    public $host;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $policy;
    /**
     * @var string
     */
    public $policySignature;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'accessId'        => 'accessId',
        'host'            => 'host',
        'key'             => 'key',
        'policy'          => 'policy',
        'policySignature' => 'policySignature',
        'url'             => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['accessId'] = $this->accessId;
        }

        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }

        if (null !== $this->policySignature) {
            $res['policySignature'] = $this->policySignature;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['accessId'])) {
            $model->accessId = $map['accessId'];
        }

        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }

        if (isset($map['policySignature'])) {
            $model->policySignature = $map['policySignature'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
