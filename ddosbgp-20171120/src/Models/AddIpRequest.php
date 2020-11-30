<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models;

use AlibabaCloud\Tea\Model;

class AddIpRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $packId;

    /**
     * @var string
     */
    public $ipList;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'packId'   => 'PackId',
        'ipList'   => 'IpList',
    ];

    public function validate()
    {
        Model::validateRequired('packId', $this->packId, true);
        Model::validateRequired('ipList', $this->ipList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->packId) {
            $res['PackId'] = $this->packId;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['PackId'])) {
            $model->packId = $map['PackId'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }

        return $model;
    }
}
