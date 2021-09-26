<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeSecurityWhiteListResponseBody;

use AlibabaCloud\Tea\Model;

class describeSecurityWhiteList extends Model
{
    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $whiteIp;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'portRange'   => 'PortRange',
        'whiteIp'     => 'WhiteIp',
        'description' => 'Description',
        'createTime'  => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->whiteIp) {
            $res['WhiteIp'] = $this->whiteIp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeSecurityWhiteList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['WhiteIp'])) {
            $model->whiteIp = $map['WhiteIp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
