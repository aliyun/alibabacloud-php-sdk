<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponse\liveAudioAuditConfigList\liveAudioAuditConfig;
use AlibabaCloud\Tea\Model;

class liveAudioAuditConfigList extends Model
{
    /**
     * @var liveAudioAuditConfig[]
     */
    public $liveAudioAuditConfig;
    protected $_name = [
        'liveAudioAuditConfig' => 'LiveAudioAuditConfig',
    ];

    public function validate()
    {
        Model::validateRequired('liveAudioAuditConfig', $this->liveAudioAuditConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveAudioAuditConfig) {
            $res['LiveAudioAuditConfig'] = [];
            if (null !== $this->liveAudioAuditConfig && \is_array($this->liveAudioAuditConfig)) {
                $n = 0;
                foreach ($this->liveAudioAuditConfig as $item) {
                    $res['LiveAudioAuditConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAudioAuditConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveAudioAuditConfig'])) {
            if (!empty($map['LiveAudioAuditConfig'])) {
                $model->liveAudioAuditConfig = [];
                $n                           = 0;
                foreach ($map['LiveAudioAuditConfig'] as $item) {
                    $model->liveAudioAuditConfig[$n++] = null !== $item ? liveAudioAuditConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
