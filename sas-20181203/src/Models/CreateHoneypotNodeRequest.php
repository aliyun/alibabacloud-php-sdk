<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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
            $res['SecurityGroupProbeIpList'] = $this->securityGroupProbeIpList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHoneypotNodeRequest
     */
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
                $model->securityGroupProbeIpList = $map['SecurityGroupProbeIpList'];
            }
        }

        return $model;
    }
}
