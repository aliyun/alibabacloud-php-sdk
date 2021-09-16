<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListVodRealtimeLogDeliveryInfosResponseBody\content;

use AlibabaCloud\Tea\Model;

class realtimeLogDeliveryInfos extends Model
{
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
    protected $_name = [
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
     * @return realtimeLogDeliveryInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
