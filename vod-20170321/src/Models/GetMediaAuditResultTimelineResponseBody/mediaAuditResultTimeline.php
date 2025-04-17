<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\ad;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\live;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\logo;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\porn;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline\terrorism;

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
        'ad' => 'Ad',
        'live' => 'Live',
        'logo' => 'Logo',
        'porn' => 'Porn',
        'terrorism' => 'Terrorism',
    ];

    public function validate()
    {
        if (\is_array($this->ad)) {
            Model::validateArray($this->ad);
        }
        if (\is_array($this->live)) {
            Model::validateArray($this->live);
        }
        if (\is_array($this->logo)) {
            Model::validateArray($this->logo);
        }
        if (\is_array($this->porn)) {
            Model::validateArray($this->porn);
        }
        if (\is_array($this->terrorism)) {
            Model::validateArray($this->terrorism);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ad) {
            if (\is_array($this->ad)) {
                $res['Ad'] = [];
                $n1 = 0;
                foreach ($this->ad as $item1) {
                    $res['Ad'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->live) {
            if (\is_array($this->live)) {
                $res['Live'] = [];
                $n1 = 0;
                foreach ($this->live as $item1) {
                    $res['Live'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logo) {
            if (\is_array($this->logo)) {
                $res['Logo'] = [];
                $n1 = 0;
                foreach ($this->logo as $item1) {
                    $res['Logo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->porn) {
            if (\is_array($this->porn)) {
                $res['Porn'] = [];
                $n1 = 0;
                foreach ($this->porn as $item1) {
                    $res['Porn'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->terrorism) {
            if (\is_array($this->terrorism)) {
                $res['Terrorism'] = [];
                $n1 = 0;
                foreach ($this->terrorism as $item1) {
                    $res['Terrorism'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ad'])) {
            if (!empty($map['Ad'])) {
                $model->ad = [];
                $n1 = 0;
                foreach ($map['Ad'] as $item1) {
                    $model->ad[$n1++] = ad::fromMap($item1);
                }
            }
        }

        if (isset($map['Live'])) {
            if (!empty($map['Live'])) {
                $model->live = [];
                $n1 = 0;
                foreach ($map['Live'] as $item1) {
                    $model->live[$n1++] = live::fromMap($item1);
                }
            }
        }

        if (isset($map['Logo'])) {
            if (!empty($map['Logo'])) {
                $model->logo = [];
                $n1 = 0;
                foreach ($map['Logo'] as $item1) {
                    $model->logo[$n1++] = logo::fromMap($item1);
                }
            }
        }

        if (isset($map['Porn'])) {
            if (!empty($map['Porn'])) {
                $model->porn = [];
                $n1 = 0;
                foreach ($map['Porn'] as $item1) {
                    $model->porn[$n1++] = porn::fromMap($item1);
                }
            }
        }

        if (isset($map['Terrorism'])) {
            if (!empty($map['Terrorism'])) {
                $model->terrorism = [];
                $n1 = 0;
                foreach ($map['Terrorism'] as $item1) {
                    $model->terrorism[$n1++] = terrorism::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
