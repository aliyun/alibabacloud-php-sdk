<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateHoneypotProbeRequest extends Model
{
    /**
     * @var bool
     */
    public $arp;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $ping;

    /**
     * @var string
     */
    public $probeId;

    /**
     * @var string[]
     */
    public $serviceIpList;
    protected $_name = [
        'arp' => 'Arp',
        'displayName' => 'DisplayName',
        'lang' => 'Lang',
        'ping' => 'Ping',
        'probeId' => 'ProbeId',
        'serviceIpList' => 'ServiceIpList',
    ];

    public function validate()
    {
        if (\is_array($this->serviceIpList)) {
            Model::validateArray($this->serviceIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arp) {
            $res['Arp'] = $this->arp;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->ping) {
            $res['Ping'] = $this->ping;
        }

        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }

        if (null !== $this->serviceIpList) {
            if (\is_array($this->serviceIpList)) {
                $res['ServiceIpList'] = [];
                $n1 = 0;
                foreach ($this->serviceIpList as $item1) {
                    $res['ServiceIpList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Arp'])) {
            $model->arp = $map['Arp'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Ping'])) {
            $model->ping = $map['Ping'];
        }

        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }

        if (isset($map['ServiceIpList'])) {
            if (!empty($map['ServiceIpList'])) {
                $model->serviceIpList = [];
                $n1 = 0;
                foreach ($map['ServiceIpList'] as $item1) {
                    $model->serviceIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
