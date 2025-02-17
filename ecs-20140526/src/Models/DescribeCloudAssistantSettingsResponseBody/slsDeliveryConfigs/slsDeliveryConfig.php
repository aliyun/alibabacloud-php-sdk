<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\slsDeliveryConfigs;

use AlibabaCloud\Dara\Model;

class slsDeliveryConfig extends Model
{
    /**
     * @var string
     */
    public $deliveryType;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $logstoreName;
    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'deliveryType' => 'DeliveryType',
        'enabled'      => 'Enabled',
        'logstoreName' => 'LogstoreName',
        'projectName'  => 'ProjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
