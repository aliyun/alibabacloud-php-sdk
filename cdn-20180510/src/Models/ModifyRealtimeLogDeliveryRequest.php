<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class ModifyRealtimeLogDeliveryRequest extends Model
{
    /**
     * @description The accelerated domain name for which you want to modify the configurations of real-time log delivery. Only one domain name is supported.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the Logstore.
     *
     * @example TestLog
     *
     * @var string
     */
    public $logstore;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the Log Service project that is used for real-time log delivery.
     *
     * @example testProject
     *
     * @var string
     */
    public $project;

    /**
     * @description The ID of the region where the Log Service project is deployed. For more information, see [Regions that support real-time log delivery](~~144883~~).
     *
     * @example ch-shanghai
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'domain'   => 'Domain',
        'logstore' => 'Logstore',
        'ownerId'  => 'OwnerId',
        'project'  => 'Project',
        'region'   => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRealtimeLogDeliveryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
