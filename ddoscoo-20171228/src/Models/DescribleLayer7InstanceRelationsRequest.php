<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribleLayer7InstanceRelationsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $domainList;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'resourceGroupId' => 'ResourceGroupId',
        'domainList'      => 'DomainList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribleLayer7InstanceRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = $map['DomainList'];
            }
        }

        return $model;
    }
}
