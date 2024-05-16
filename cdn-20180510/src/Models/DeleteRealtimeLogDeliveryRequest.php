<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DeleteRealtimeLogDeliveryRequest extends Model
{
    /**
     * @description The acceleration domain name for which you want to disable real-time log delivery. You can specify multiple domain names and separate them with commas (,).
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the Logstore where log entries are stored.
     *
     * This parameter is required.
     * @example LogstoreName
     *
     * @var string
     */
    public $logstore;

    /**
     * @description The name of the Log Service project that is used for real-time log delivery.
     *
     * This parameter is required.
     * @example ProjectName
     *
     * @var string
     */
    public $project;

    /**
     * @description The ID of the region where the Log Service project is deployed. For more information, see [Regions that support real-time log delivery](https://help.aliyun.com/document_detail/144883.html).
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'domain'   => 'Domain',
        'logstore' => 'Logstore',
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
     * @return DeleteRealtimeLogDeliveryRequest
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
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
