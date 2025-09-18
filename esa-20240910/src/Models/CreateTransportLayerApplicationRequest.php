<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateTransportLayerApplicationRequest\rules;

class CreateTransportLayerApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $crossBorderOptimization;

    /**
     * @var string
     */
    public $ipAccessRule;

    /**
     * @var string
     */
    public $ipv6;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $staticIp;
    protected $_name = [
        'crossBorderOptimization' => 'CrossBorderOptimization',
        'ipAccessRule' => 'IpAccessRule',
        'ipv6' => 'Ipv6',
        'recordName' => 'RecordName',
        'rules' => 'Rules',
        'siteId' => 'SiteId',
        'staticIp' => 'StaticIp',
    ];

    public function validate()
    {
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossBorderOptimization) {
            $res['CrossBorderOptimization'] = $this->crossBorderOptimization;
        }

        if (null !== $this->ipAccessRule) {
            $res['IpAccessRule'] = $this->ipAccessRule;
        }

        if (null !== $this->ipv6) {
            $res['Ipv6'] = $this->ipv6;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->staticIp) {
            $res['StaticIp'] = $this->staticIp;
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
        if (isset($map['CrossBorderOptimization'])) {
            $model->crossBorderOptimization = $map['CrossBorderOptimization'];
        }

        if (isset($map['IpAccessRule'])) {
            $model->ipAccessRule = $map['IpAccessRule'];
        }

        if (isset($map['Ipv6'])) {
            $model->ipv6 = $map['Ipv6'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['StaticIp'])) {
            $model->staticIp = $map['StaticIp'];
        }

        return $model;
    }
}
