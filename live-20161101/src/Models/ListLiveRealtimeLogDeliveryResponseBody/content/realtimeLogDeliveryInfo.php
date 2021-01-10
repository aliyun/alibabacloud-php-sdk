<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryResponseBody\content;

use AlibabaCloud\Tea\Model;

class realtimeLogDeliveryInfo extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $dmId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'project'    => 'Project',
        'logstore'   => 'Logstore',
        'region'     => 'Region',
        'domainName' => 'DomainName',
        'dmId'       => 'DmId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->dmId) {
            $res['DmId'] = $this->dmId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realtimeLogDeliveryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DmId'])) {
            $model->dmId = $map['DmId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
