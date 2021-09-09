<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAvailableEsInstanceIdsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $kibanaEndpoint;

    /**
     * @var string
     */
    public $esInstanceId;
    protected $_name = [
        'endpoint'       => 'endpoint',
        'description'    => 'description',
        'kibanaEndpoint' => 'kibanaEndpoint',
        'esInstanceId'   => 'esInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->kibanaEndpoint) {
            $res['kibanaEndpoint'] = $this->kibanaEndpoint;
        }
        if (null !== $this->esInstanceId) {
            $res['esInstanceId'] = $this->esInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['kibanaEndpoint'])) {
            $model->kibanaEndpoint = $map['kibanaEndpoint'];
        }
        if (isset($map['esInstanceId'])) {
            $model->esInstanceId = $map['esInstanceId'];
        }

        return $model;
    }
}
