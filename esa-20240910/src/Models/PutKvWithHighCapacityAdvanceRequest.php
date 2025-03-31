<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class PutKvWithHighCapacityAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var Stream
     */
    public $urlObject;
    protected $_name = [
        'key' => 'Key',
        'namespace' => 'Namespace',
        'urlObject' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->urlObject) {
            $res['Url'] = $this->urlObject;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Url'])) {
            $model->urlObject = $map['Url'];
        }

        return $model;
    }
}
