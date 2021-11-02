<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\ad;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\live;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\logo;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\porn;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\terrorism;
use AlibabaCloud\Tea\Model;

class mediaAuditResultTimeline extends Model
{
    /**
     * @var ad[]
     */
    public $ad;

    /**
     * @var live[]
     */
    public $live;

    /**
     * @var logo[]
     */
    public $logo;

    /**
     * @var porn[]
     */
    public $porn;

    /**
     * @var terrorism[]
     */
    public $terrorism;
    protected $_name = [
        'ad'        => 'Ad',
        'live'      => 'Live',
        'logo'      => 'Logo',
        'porn'      => 'Porn',
        'terrorism' => 'Terrorism',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ad) {
            $res['Ad'] = [];
            if (null !== $this->ad && \is_array($this->ad)) {
                $n = 0;
                foreach ($this->ad as $item) {
                    $res['Ad'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->live) {
            $res['Live'] = [];
            if (null !== $this->live && \is_array($this->live)) {
                $n = 0;
                foreach ($this->live as $item) {
                    $res['Live'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logo) {
            $res['Logo'] = [];
            if (null !== $this->logo && \is_array($this->logo)) {
                $n = 0;
                foreach ($this->logo as $item) {
                    $res['Logo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->porn) {
            $res['Porn'] = [];
            if (null !== $this->porn && \is_array($this->porn)) {
                $n = 0;
                foreach ($this->porn as $item) {
                    $res['Porn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->terrorism) {
            $res['Terrorism'] = [];
            if (null !== $this->terrorism && \is_array($this->terrorism)) {
                $n = 0;
                foreach ($this->terrorism as $item) {
                    $res['Terrorism'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaAuditResultTimeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ad'])) {
            if (!empty($map['Ad'])) {
                $model->ad = [];
                $n         = 0;
                foreach ($map['Ad'] as $item) {
                    $model->ad[$n++] = null !== $item ? ad::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Live'])) {
            if (!empty($map['Live'])) {
                $model->live = [];
                $n           = 0;
                foreach ($map['Live'] as $item) {
                    $model->live[$n++] = null !== $item ? live::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Logo'])) {
            if (!empty($map['Logo'])) {
                $model->logo = [];
                $n           = 0;
                foreach ($map['Logo'] as $item) {
                    $model->logo[$n++] = null !== $item ? logo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Porn'])) {
            if (!empty($map['Porn'])) {
                $model->porn = [];
                $n           = 0;
                foreach ($map['Porn'] as $item) {
                    $model->porn[$n++] = null !== $item ? porn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Terrorism'])) {
            if (!empty($map['Terrorism'])) {
                $model->terrorism = [];
                $n                = 0;
                foreach ($map['Terrorism'] as $item) {
                    $model->terrorism[$n++] = null !== $item ? terrorism::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
