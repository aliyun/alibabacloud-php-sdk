<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

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
        'batchResourceSetting' => 'batchResourceSetting',
        'flinkConf' => 'flinkConf',
        'streamingResourceSetting' => 'streamingResourceSetting',
    ];

    public function validate()
    {
        if (null !== $this->batchResourceSetting) {
            $this->batchResourceSetting->validate();
        }
        if (\is_array($this->flinkConf)) {
            Model::validateArray($this->flinkConf);
        }
        if (null !== $this->streamingResourceSetting) {
            $this->streamingResourceSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchResourceSetting) {
            $res['batchResourceSetting'] = null !== $this->batchResourceSetting ? $this->batchResourceSetting->toArray($noStream) : $this->batchResourceSetting;
        }

        if (null !== $this->flinkConf) {
            if (\is_array($this->flinkConf)) {
                $res['flinkConf'] = [];
                foreach ($this->flinkConf as $key1 => $value1) {
                    $res['flinkConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->streamingResourceSetting) {
            $res['streamingResourceSetting'] = null !== $this->streamingResourceSetting ? $this->streamingResourceSetting->toArray($noStream) : $this->streamingResourceSetting;
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
        if (isset($map['batchResourceSetting'])) {
            $model->batchResourceSetting = BatchResourceSetting::fromMap($map['batchResourceSetting']);
        }

        if (isset($map['flinkConf'])) {
            if (!empty($map['flinkConf'])) {
                $model->flinkConf = [];
                foreach ($map['flinkConf'] as $key1 => $value1) {
                    $model->flinkConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['streamingResourceSetting'])) {
            $model->streamingResourceSetting = StreamingResourceSetting::fromMap($map['streamingResourceSetting']);
        }

        return $model;
    }
}
