<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateHoneypotNodeRequest extends Model
{
    /**
     * @var bool
     */
    public $allowHoneypotAccessInternet;
    /**
     * @var int
     */
    public $availableProbeNum;
    /**
     * @var string
     */
    public $nodeName;
    /**
     * @var string[]
     */
    public $securityGroupProbeIpList;
    protected $_name = [
        'allowHoneypotAccessInternet' => 'AllowHoneypotAccessInternet',
        'availableProbeNum'           => 'AvailableProbeNum',
        'nodeName'                    => 'NodeName',
        'securityGroupProbeIpList'    => 'SecurityGroupProbeIpList',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroupProbeIpList)) {
            Model::validateArray($this->securityGroupProbeIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowHoneypotAccessInternet) {
            $res['AllowHoneypotAccessInternet'] = $this->allowHoneypotAccessInternet;
        }

        if (null !== $this->availableProbeNum) {
            $res['AvailableProbeNum'] = $this->availableProbeNum;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->securityGroupProbeIpList) {
            if (\is_array($this->securityGroupProbeIpList)) {
                $res['SecurityGroupProbeIpList'] = [];
                $n1                              = 0;
                foreach ($this->securityGroupProbeIpList as $item1) {
                    $res['SecurityGroupProbeIpList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AllowHoneypotAccessInternet'])) {
            $model->allowHoneypotAccessInternet = $map['AllowHoneypotAccessInternet'];
        }

        if (isset($map['AvailableProbeNum'])) {
            $model->availableProbeNum = $map['AvailableProbeNum'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['SecurityGroupProbeIpList'])) {
            if (!empty($map['SecurityGroupProbeIpList'])) {
                $model->securityGroupProbeIpList = [];
                $n1                              = 0;
                foreach ($map['SecurityGroupProbeIpList'] as $item1) {
                    $model->securityGroupProbeIpList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
