<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class BriefResourceSetting extends Model
{
    /**
     * @var BatchResourceSetting
     */
    public $batchResourceSetting;

    /**
     * @var mixed[]
     */
    public $flinkConf;

    /**
     * @var StreamingResourceSetting
     */
    public $streamingResourceSetting;
    protected $_name = [
        'batchResourceSetting'     => 'batchResourceSetting',
        'flinkConf'                => 'flinkConf',
        'streamingResourceSetting' => 'streamingResourceSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchResourceSetting) {
            $res['batchResourceSetting'] = null !== $this->batchResourceSetting ? $this->batchResourceSetting->toMap() : null;
        }
        if (null !== $this->flinkConf) {
            $res['flinkConf'] = $this->flinkConf;
        }
        if (null !== $this->streamingResourceSetting) {
            $res['streamingResourceSetting'] = null !== $this->streamingResourceSetting ? $this->streamingResourceSetting->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BriefResourceSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batchResourceSetting'])) {
            $model->batchResourceSetting = BatchResourceSetting::fromMap($map['batchResourceSetting']);
        }
        if (isset($map['flinkConf'])) {
            $model->flinkConf = $map['flinkConf'];
        }
        if (isset($map['streamingResourceSetting'])) {
            $model->streamingResourceSetting = StreamingResourceSetting::fromMap($map['streamingResourceSetting']);
        }

        return $model;
    }
}
