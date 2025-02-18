<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects;

use AlibabaCloud\Dara\Model;

class ipWhiteList extends Model
{
    /**
     * @var string
     */
    public $ipList;
    /**
     * @var string
     */
    public $vpcIpList;
    protected $_name = [
        'ipList'    => 'ipList',
        'vpcIpList' => 'vpcIpList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipList) {
            $res['ipList'] = $this->ipList;
        }

        if (null !== $this->vpcIpList) {
            $res['vpcIpList'] = $this->vpcIpList;
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
        if (isset($map['ipList'])) {
            $model->ipList = $map['ipList'];
        }

        if (isset($map['vpcIpList'])) {
            $model->vpcIpList = $map['vpcIpList'];
        }

        return $model;
    }
}
