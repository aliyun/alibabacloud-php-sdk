<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSnatEntriesResponseBody\snatEntries;

use AlibabaCloud\Tea\Model;

class snatEntry extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $snatIp;
    protected $_name = [
        'cidrBlock'  => 'CidrBlock',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'snatIp'     => 'SnatIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snatEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }

        return $model;
    }
}
