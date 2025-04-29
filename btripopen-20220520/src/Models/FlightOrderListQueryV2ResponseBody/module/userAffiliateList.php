<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\userAffiliateList\costCenter;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\userAffiliateList\department;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\userAffiliateList\invoice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\userAffiliateList\project;

class userAffiliateList extends Model
{
    /**
     * @var costCenter
     */
    public $costCenter;

    /**
     * @var department
     */
    public $department;

    /**
     * @var invoice
     */
    public $invoice;

    /**
     * @var project
     */
    public $project;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'costCenter' => 'cost_center',
        'department' => 'department',
        'invoice' => 'invoice',
        'project' => 'project',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (null !== $this->costCenter) {
            $this->costCenter->validate();
        }
        if (null !== $this->department) {
            $this->department->validate();
        }
        if (null !== $this->invoice) {
            $this->invoice->validate();
        }
        if (null !== $this->project) {
            $this->project->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenter) {
            $res['cost_center'] = null !== $this->costCenter ? $this->costCenter->toArray($noStream) : $this->costCenter;
        }

        if (null !== $this->department) {
            $res['department'] = null !== $this->department ? $this->department->toArray($noStream) : $this->department;
        }

        if (null !== $this->invoice) {
            $res['invoice'] = null !== $this->invoice ? $this->invoice->toArray($noStream) : $this->invoice;
        }

        if (null !== $this->project) {
            $res['project'] = null !== $this->project ? $this->project->toArray($noStream) : $this->project;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
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
        if (isset($map['cost_center'])) {
            $model->costCenter = costCenter::fromMap($map['cost_center']);
        }

        if (isset($map['department'])) {
            $model->department = department::fromMap($map['department']);
        }

        if (isset($map['invoice'])) {
            $model->invoice = invoice::fromMap($map['invoice']);
        }

        if (isset($map['project'])) {
            $model->project = project::fromMap($map['project']);
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
