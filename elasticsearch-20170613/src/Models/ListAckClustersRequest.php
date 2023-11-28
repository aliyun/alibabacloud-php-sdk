<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListAckClustersRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 3
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the ACK clusters belong.
     *
     * @example vpc-bp12nu14urf0upaf4****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'page'  => 'page',
        'size'  => 'size',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAckClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
