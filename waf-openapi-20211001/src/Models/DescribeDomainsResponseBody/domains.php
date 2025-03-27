<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains\backeds;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains\listenPorts;

class domains extends Model
{
    /**
     * @var backeds
     */
    public $backeds;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var listenPorts
     */
    public $listenPorts;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'backeds' => 'Backeds',
        'cname' => 'Cname',
        'domain' => 'Domain',
        'listenPorts' => 'ListenPorts',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->backeds) {
            $this->backeds->validate();
        }
        if (null !== $this->listenPorts) {
            $this->listenPorts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backeds) {
            $res['Backeds'] = null !== $this->backeds ? $this->backeds->toArray($noStream) : $this->backeds;
        }

        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->listenPorts) {
            $res['ListenPorts'] = null !== $this->listenPorts ? $this->listenPorts->toArray($noStream) : $this->listenPorts;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
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
        if (isset($map['Backeds'])) {
            $model->backeds = backeds::fromMap($map['Backeds']);
        }

        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['ListenPorts'])) {
            $model->listenPorts = listenPorts::fromMap($map['ListenPorts']);
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
