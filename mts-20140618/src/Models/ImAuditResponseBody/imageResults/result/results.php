<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\frames;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\hintWordsInfo;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\logoData;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\programCodeData;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\qrcodeLocations;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\sfaceData;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $rate;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var frames[]
     */
    public $frames;

    /**
     * @var hintWordsInfo[]
     */
    public $hintWordsInfo;

    /**
     * @var logoData[]
     */
    public $logoData;

    /**
     * @var string[]
     */
    public $ocrData;

    /**
     * @var programCodeData[]
     */
    public $programCodeData;

    /**
     * @var string[]
     */
    public $qrcodeData;

    /**
     * @var qrcodeLocations[]
     */
    public $qrcodeLocations;

    /**
     * @var sfaceData[]
     */
    public $sfaceData;
    protected $_name = [
        'label'           => 'Label',
        'rate'            => 'Rate',
        'scene'           => 'Scene',
        'suggestion'      => 'Suggestion',
        'frames'          => 'frames',
        'hintWordsInfo'   => 'hintWordsInfo',
        'logoData'        => 'logoData',
        'ocrData'         => 'ocrData',
        'programCodeData' => 'programCodeData',
        'qrcodeData'      => 'qrcodeData',
        'qrcodeLocations' => 'qrcodeLocations',
        'sfaceData'       => 'sfaceData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->frames) {
            $res['frames'] = [];
            if (null !== $this->frames && \is_array($this->frames)) {
                $n = 0;
                foreach ($this->frames as $item) {
                    $res['frames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hintWordsInfo) {
            $res['hintWordsInfo'] = [];
            if (null !== $this->hintWordsInfo && \is_array($this->hintWordsInfo)) {
                $n = 0;
                foreach ($this->hintWordsInfo as $item) {
                    $res['hintWordsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logoData) {
            $res['logoData'] = [];
            if (null !== $this->logoData && \is_array($this->logoData)) {
                $n = 0;
                foreach ($this->logoData as $item) {
                    $res['logoData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ocrData) {
            $res['ocrData'] = $this->ocrData;
        }
        if (null !== $this->programCodeData) {
            $res['programCodeData'] = [];
            if (null !== $this->programCodeData && \is_array($this->programCodeData)) {
                $n = 0;
                foreach ($this->programCodeData as $item) {
                    $res['programCodeData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->qrcodeData) {
            $res['qrcodeData'] = $this->qrcodeData;
        }
        if (null !== $this->qrcodeLocations) {
            $res['qrcodeLocations'] = [];
            if (null !== $this->qrcodeLocations && \is_array($this->qrcodeLocations)) {
                $n = 0;
                foreach ($this->qrcodeLocations as $item) {
                    $res['qrcodeLocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sfaceData) {
            $res['sfaceData'] = [];
            if (null !== $this->sfaceData && \is_array($this->sfaceData)) {
                $n = 0;
                foreach ($this->sfaceData as $item) {
                    $res['sfaceData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['frames'])) {
            if (!empty($map['frames'])) {
                $model->frames = [];
                $n             = 0;
                foreach ($map['frames'] as $item) {
                    $model->frames[$n++] = null !== $item ? frames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['hintWordsInfo'])) {
            if (!empty($map['hintWordsInfo'])) {
                $model->hintWordsInfo = [];
                $n                    = 0;
                foreach ($map['hintWordsInfo'] as $item) {
                    $model->hintWordsInfo[$n++] = null !== $item ? hintWordsInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['logoData'])) {
            if (!empty($map['logoData'])) {
                $model->logoData = [];
                $n               = 0;
                foreach ($map['logoData'] as $item) {
                    $model->logoData[$n++] = null !== $item ? logoData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ocrData'])) {
            if (!empty($map['ocrData'])) {
                $model->ocrData = $map['ocrData'];
            }
        }
        if (isset($map['programCodeData'])) {
            if (!empty($map['programCodeData'])) {
                $model->programCodeData = [];
                $n                      = 0;
                foreach ($map['programCodeData'] as $item) {
                    $model->programCodeData[$n++] = null !== $item ? programCodeData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['qrcodeData'])) {
            if (!empty($map['qrcodeData'])) {
                $model->qrcodeData = $map['qrcodeData'];
            }
        }
        if (isset($map['qrcodeLocations'])) {
            if (!empty($map['qrcodeLocations'])) {
                $model->qrcodeLocations = [];
                $n                      = 0;
                foreach ($map['qrcodeLocations'] as $item) {
                    $model->qrcodeLocations[$n++] = null !== $item ? qrcodeLocations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sfaceData'])) {
            if (!empty($map['sfaceData'])) {
                $model->sfaceData = [];
                $n                = 0;
                foreach ($map['sfaceData'] as $item) {
                    $model->sfaceData[$n++] = null !== $item ? sfaceData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
