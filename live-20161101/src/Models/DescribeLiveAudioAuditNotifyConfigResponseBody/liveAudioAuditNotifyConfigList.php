<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponseBody\liveAudioAuditNotifyConfigList\liveAudioAuditNotifyConfig;

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
        if (\is_array($this->liveAudioAuditNotifyConfig)) {
            Model::validateArray($this->liveAudioAuditNotifyConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveAudioAuditNotifyConfig) {
            if (\is_array($this->liveAudioAuditNotifyConfig)) {
                $res['LiveAudioAuditNotifyConfig'] = [];
                $n1 = 0;
                foreach ($this->liveAudioAuditNotifyConfig as $item1) {
                    $res['LiveAudioAuditNotifyConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LiveAudioAuditNotifyConfig'])) {
            if (!empty($map['LiveAudioAuditNotifyConfig'])) {
                $model->liveAudioAuditNotifyConfig = [];
                $n1 = 0;
                foreach ($map['LiveAudioAuditNotifyConfig'] as $item1) {
                    $model->liveAudioAuditNotifyConfig[$n1] = liveAudioAuditNotifyConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
