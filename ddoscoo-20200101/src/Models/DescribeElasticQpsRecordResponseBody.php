<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsRecordResponseBody\elasticQpsList;

class DescribeElasticQpsRecordResponseBody extends Model
{
    /**
     * @var elasticQpsList[]
     */
    public $elasticQpsList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticQpsList' => 'ElasticQpsList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->elasticQpsList)) {
            Model::validateArray($this->elasticQpsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticQpsList) {
            if (\is_array($this->elasticQpsList)) {
                $res['ElasticQpsList'] = [];
                $n1                    = 0;
                foreach ($this->elasticQpsList as $item1) {
                    $res['ElasticQpsList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ElasticQpsList'])) {
            if (!empty($map['ElasticQpsList'])) {
                $model->elasticQpsList = [];
                $n1                    = 0;
                foreach ($map['ElasticQpsList'] as $item1) {
                    $model->elasticQpsList[$n1++] = elasticQpsList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
