<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest\edgeDnsClusters;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest\forwardIp;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest\vpcs;

class AddResolverRuleRequest extends Model
{
    /**
     * @var edgeDnsClusters[]
     */
    public $edgeDnsClusters;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var forwardIp[]
     */
    public $forwardIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var vpcs[]
     */
    public $vpcs;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'edgeDnsClusters' => 'EdgeDnsClusters',
        'endpointId' => 'EndpointId',
        'forwardIp' => 'ForwardIp',
        'lang' => 'Lang',
        'name' => 'Name',
        'type' => 'Type',
        'vpcs' => 'Vpcs',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        if (\is_array($this->edgeDnsClusters)) {
            Model::validateArray($this->edgeDnsClusters);
        }
        if (\is_array($this->forwardIp)) {
            Model::validateArray($this->forwardIp);
        }
        if (\is_array($this->vpcs)) {
            Model::validateArray($this->vpcs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeDnsClusters) {
            if (\is_array($this->edgeDnsClusters)) {
                $res['EdgeDnsClusters'] = [];
                $n1 = 0;
                foreach ($this->edgeDnsClusters as $item1) {
                    $res['EdgeDnsClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->forwardIp) {
            if (\is_array($this->forwardIp)) {
                $res['ForwardIp'] = [];
                $n1 = 0;
                foreach ($this->forwardIp as $item1) {
                    $res['ForwardIp'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vpcs) {
            if (\is_array($this->vpcs)) {
                $res['Vpcs'] = [];
                $n1 = 0;
                foreach ($this->vpcs as $item1) {
                    $res['Vpcs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['EdgeDnsClusters'])) {
            if (!empty($map['EdgeDnsClusters'])) {
                $model->edgeDnsClusters = [];
                $n1 = 0;
                foreach ($map['EdgeDnsClusters'] as $item1) {
                    $model->edgeDnsClusters[$n1] = edgeDnsClusters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['ForwardIp'])) {
            if (!empty($map['ForwardIp'])) {
                $model->forwardIp = [];
                $n1 = 0;
                foreach ($map['ForwardIp'] as $item1) {
                    $model->forwardIp[$n1] = forwardIp::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Vpcs'])) {
            if (!empty($map['Vpcs'])) {
                $model->vpcs = [];
                $n1 = 0;
                foreach ($map['Vpcs'] as $item1) {
                    $model->vpcs[$n1] = vpcs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
