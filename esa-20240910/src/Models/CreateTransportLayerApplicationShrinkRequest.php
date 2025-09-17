<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateTransportLayerApplicationShrinkRequest extends Model
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
     * @var string
     */
    public $rulesShrink;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'crossBorderOptimization' => 'CrossBorderOptimization',
        'ipAccessRule' => 'IpAccessRule',
        'ipv6' => 'Ipv6',
        'recordName' => 'RecordName',
        'rulesShrink' => 'Rules',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
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

        if (null !== $this->rulesShrink) {
            $res['Rules'] = $this->rulesShrink;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
            $model->rulesShrink = $map['Rules'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
