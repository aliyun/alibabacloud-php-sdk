<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class elasticNodes extends Model
{
    /**
     * @var string[]
     */
    public $elasticNode;
    protected $_name = [
        'elasticNode' => 'ElasticNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticNode) {
            $res['ElasticNode'] = $this->elasticNode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticNode'])) {
            if (!empty($map['ElasticNode'])) {
                $model->elasticNode = $map['ElasticNode'];
            }
        }

        return $model;
    }
}
