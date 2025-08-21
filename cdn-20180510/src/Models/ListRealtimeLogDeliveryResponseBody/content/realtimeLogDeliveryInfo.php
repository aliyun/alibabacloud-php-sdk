<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryResponseBody\content;

use AlibabaCloud\Dara\Model;

class realtimeLogDeliveryInfo extends Model
{
    /**
     * @var int
     */
    public $dmId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'dmId' => 'DmId',
        'domain' => 'Domain',
        'logstore' => 'Logstore',
        'project' => 'Project',
        'region' => 'Region',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dmId) {
            $res['DmId'] = $this->dmId;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['DmId'])) {
            $model->dmId = $map['DmId'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
