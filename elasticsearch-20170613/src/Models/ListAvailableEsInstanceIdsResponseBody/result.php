<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAvailableEsInstanceIdsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $esInstanceId;

    /**
     * @var string
     */
    public $kibanaEndpoint;
    protected $_name = [
        'description' => 'description',
        'endpoint' => 'endpoint',
        'esInstanceId' => 'esInstanceId',
        'kibanaEndpoint' => 'kibanaEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->esInstanceId) {
            $res['esInstanceId'] = $this->esInstanceId;
        }

        if (null !== $this->kibanaEndpoint) {
            $res['kibanaEndpoint'] = $this->kibanaEndpoint;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['esInstanceId'])) {
            $model->esInstanceId = $map['esInstanceId'];
        }

        if (isset($map['kibanaEndpoint'])) {
            $model->kibanaEndpoint = $map['kibanaEndpoint'];
        }

        return $model;
    }
}
