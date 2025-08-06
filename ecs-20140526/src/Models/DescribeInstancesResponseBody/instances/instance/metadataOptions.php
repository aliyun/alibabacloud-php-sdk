<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;

class metadataOptions extends Model
{
    /**
     * @var string
     */
    public $httpEndpoint;

    /**
     * @var int
     */
    public $httpPutResponseHopLimit;

    /**
     * @var string
     */
    public $httpTokens;
    protected $_name = [
        'httpEndpoint' => 'HttpEndpoint',
        'httpPutResponseHopLimit' => 'HttpPutResponseHopLimit',
        'httpTokens' => 'HttpTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }

        if (null !== $this->httpPutResponseHopLimit) {
            $res['HttpPutResponseHopLimit'] = $this->httpPutResponseHopLimit;
        }

        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
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
        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }

        if (isset($map['HttpPutResponseHopLimit'])) {
            $model->httpPutResponseHopLimit = $map['HttpPutResponseHopLimit'];
        }

        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }

        return $model;
    }
}
