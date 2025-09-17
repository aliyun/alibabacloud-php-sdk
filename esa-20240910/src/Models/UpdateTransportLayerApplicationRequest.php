<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateTransportLayerApplicationRequest\rules;

class UpdateTransportLayerApplicationRequest extends Model
{
    /**
     * @var int
     */
    public $applicationId;

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
     * @var rules[]
     */
    public $rules;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'crossBorderOptimization' => 'CrossBorderOptimization',
        'ipAccessRule' => 'IpAccessRule',
        'ipv6' => 'Ipv6',
        'rules' => 'Rules',
        'siteId' => 'SiteId',
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
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
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

        if (isset($map['CrossBorderOptimization'])) {
            $model->crossBorderOptimization = $map['CrossBorderOptimization'];
        }

        if (isset($map['IpAccessRule'])) {
            $model->ipAccessRule = $map['IpAccessRule'];
        }

        if (isset($map['Ipv6'])) {
            $model->ipv6 = $map['Ipv6'];
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

        return $model;
    }
}
