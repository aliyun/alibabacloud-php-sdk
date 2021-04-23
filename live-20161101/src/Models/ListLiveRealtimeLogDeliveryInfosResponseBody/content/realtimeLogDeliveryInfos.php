<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryInfosResponseBody\content;

use AlibabaCloud\Tea\Model;

class realtimeLogDeliveryInfos extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'region'   => 'Region',
        'logstore' => 'Logstore',
        'project'  => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realtimeLogDeliveryInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
