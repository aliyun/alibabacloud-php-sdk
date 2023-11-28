<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAvailableEsInstanceIdsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The name of the Elasticsearch cluster.
     *
     * @example instanceName
     *
     * @var string
     */
    public $description;

    /**
     * @description The address that is used to access the Elasticsearch cluster over the Internet.
     *
     * @example http://es-cn-n6w1o1x0w001c****.elasticsearch.aliyuncs.com:9200
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The ID of the Elasticsearch cluster.
     *
     * @example es-cn-n6w1o1x0w001c****
     *
     * @var string
     */
    public $esInstanceId;

    /**
     * @description The address that is used to access the Kibana console of the Elasticsearch cluster over the Internet.
     *
     * @example https://es-cn-n6w1o1x0w001c****.kibana.elasticsearch.aliyuncs.com:5601
     *
     * @var string
     */
    public $kibanaEndpoint;
    protected $_name = [
        'description'    => 'description',
        'endpoint'       => 'endpoint',
        'esInstanceId'   => 'esInstanceId',
        'kibanaEndpoint' => 'kibanaEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
