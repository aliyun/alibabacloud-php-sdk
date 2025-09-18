<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListTransportLayerApplicationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListTransportLayerApplicationsResponseBody\applications\rules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListTransportLayerApplicationsResponseBody\applications\staticIpV4List;

class applications extends Model
{
    /**
     * @var int
     */
    public $applicationId;

    /**
     * @var string
     */
    public $cname;

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
    public $rulesCount;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $staticIp;

    /**
     * @var staticIpV4List[]
     */
    public $staticIpV4List;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'cname' => 'Cname',
        'crossBorderOptimization' => 'CrossBorderOptimization',
        'ipAccessRule' => 'IpAccessRule',
        'ipv6' => 'Ipv6',
        'recordName' => 'RecordName',
        'rules' => 'Rules',
        'rulesCount' => 'RulesCount',
        'siteId' => 'SiteId',
        'staticIp' => 'StaticIp',
        'staticIpV4List' => 'StaticIpV4List',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        if (\is_array($this->staticIpV4List)) {
            Model::validateArray($this->staticIpV4List);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

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

        if (null !== $this->rulesCount) {
            $res['RulesCount'] = $this->rulesCount;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->staticIp) {
            $res['StaticIp'] = $this->staticIp;
        }

        if (null !== $this->staticIpV4List) {
            if (\is_array($this->staticIpV4List)) {
                $res['StaticIpV4List'] = [];
                $n1 = 0;
                foreach ($this->staticIpV4List as $item1) {
                    $res['StaticIpV4List'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

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

        if (isset($map['RulesCount'])) {
            $model->rulesCount = $map['RulesCount'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['StaticIp'])) {
            $model->staticIp = $map['StaticIp'];
        }

        if (isset($map['StaticIpV4List'])) {
            if (!empty($map['StaticIpV4List'])) {
                $model->staticIpV4List = [];
                $n1 = 0;
                foreach ($map['StaticIpV4List'] as $item1) {
                    $model->staticIpV4List[$n1] = staticIpV4List::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
