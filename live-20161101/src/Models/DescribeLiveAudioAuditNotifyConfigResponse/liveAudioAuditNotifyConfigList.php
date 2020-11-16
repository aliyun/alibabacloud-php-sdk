<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponse\liveAudioAuditNotifyConfigList\liveAudioAuditNotifyConfig;
use AlibabaCloud\Tea\Model;

class liveAudioAuditNotifyConfigList extends Model
{
    /**
     * @var liveAudioAuditNotifyConfig[]
     */
    public $liveAudioAuditNotifyConfig;
    protected $_name = [
        'liveAudioAuditNotifyConfig' => 'LiveAudioAuditNotifyConfig',
    ];

    public function validate()
    {
        Model::validateRequired('liveAudioAuditNotifyConfig', $this->liveAudioAuditNotifyConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveAudioAuditNotifyConfig) {
            $res['LiveAudioAuditNotifyConfig'] = [];
            if (null !== $this->liveAudioAuditNotifyConfig && \is_array($this->liveAudioAuditNotifyConfig)) {
                $n = 0;
                foreach ($this->liveAudioAuditNotifyConfig as $item) {
                    $res['LiveAudioAuditNotifyConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAudioAuditNotifyConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveAudioAuditNotifyConfig'])) {
            if (!empty($map['LiveAudioAuditNotifyConfig'])) {
                $model->liveAudioAuditNotifyConfig = [];
                $n                                 = 0;
                foreach ($map['LiveAudioAuditNotifyConfig'] as $item) {
                    $model->liveAudioAuditNotifyConfig[$n++] = null !== $item ? liveAudioAuditNotifyConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
