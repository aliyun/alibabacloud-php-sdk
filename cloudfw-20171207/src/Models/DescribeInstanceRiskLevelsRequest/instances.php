<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsRequest;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->internetIp)) {
            Model::validateArray($this->internetIp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->internetIp) {
            if (\is_array($this->internetIp)) {
                $res['InternetIp'] = [];
                $n1 = 0;
                foreach ($this->internetIp as $item1) {
                    $res['InternetIp'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InternetIp'])) {
            if (!empty($map['InternetIp'])) {
                $model->internetIp = [];
                $n1 = 0;
                foreach ($map['InternetIp'] as $item1) {
                    $model->internetIp[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
