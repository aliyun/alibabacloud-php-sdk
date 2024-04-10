<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest;

use AlibabaCloud\Tea\Model;

class slsDeliveryConfig extends Model
{
    /**
     * @description Specifies whether to deliver records to Simple Log Service. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The name of the Logstore.
     *
     * @example example-logstore
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @description The name of the Simple Log Service project.
     *
     * @example example-project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'enabled'      => 'Enabled',
        'logstoreName' => 'LogstoreName',
        'projectName'  => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return slsDeliveryConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
