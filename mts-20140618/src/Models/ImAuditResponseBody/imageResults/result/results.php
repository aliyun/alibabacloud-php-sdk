<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\frames;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\hintWordsInfo;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\logoData;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\programCodeData;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\qrcodeLocations;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\sfaceData;

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
        'label' => 'Label',
        'rate' => 'Rate',
        'scene' => 'Scene',
        'suggestion' => 'Suggestion',
        'frames' => 'frames',
        'hintWordsInfo' => 'hintWordsInfo',
        'logoData' => 'logoData',
        'ocrData' => 'ocrData',
        'programCodeData' => 'programCodeData',
        'qrcodeData' => 'qrcodeData',
        'qrcodeLocations' => 'qrcodeLocations',
        'sfaceData' => 'sfaceData',
    ];

    public function validate()
    {
        if (\is_array($this->frames)) {
            Model::validateArray($this->frames);
        }
        if (\is_array($this->hintWordsInfo)) {
            Model::validateArray($this->hintWordsInfo);
        }
        if (\is_array($this->logoData)) {
            Model::validateArray($this->logoData);
        }
        if (\is_array($this->ocrData)) {
            Model::validateArray($this->ocrData);
        }
        if (\is_array($this->programCodeData)) {
            Model::validateArray($this->programCodeData);
        }
        if (\is_array($this->qrcodeData)) {
            Model::validateArray($this->qrcodeData);
        }
        if (\is_array($this->qrcodeLocations)) {
            Model::validateArray($this->qrcodeLocations);
        }
        if (\is_array($this->sfaceData)) {
            Model::validateArray($this->sfaceData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->frames)) {
                $res['frames'] = [];
                $n1 = 0;
                foreach ($this->frames as $item1) {
                    $res['frames'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hintWordsInfo) {
            if (\is_array($this->hintWordsInfo)) {
                $res['hintWordsInfo'] = [];
                $n1 = 0;
                foreach ($this->hintWordsInfo as $item1) {
                    $res['hintWordsInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logoData) {
            if (\is_array($this->logoData)) {
                $res['logoData'] = [];
                $n1 = 0;
                foreach ($this->logoData as $item1) {
                    $res['logoData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ocrData) {
            if (\is_array($this->ocrData)) {
                $res['ocrData'] = [];
                $n1 = 0;
                foreach ($this->ocrData as $item1) {
                    $res['ocrData'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->programCodeData) {
            if (\is_array($this->programCodeData)) {
                $res['programCodeData'] = [];
                $n1 = 0;
                foreach ($this->programCodeData as $item1) {
                    $res['programCodeData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->qrcodeData) {
            if (\is_array($this->qrcodeData)) {
                $res['qrcodeData'] = [];
                $n1 = 0;
                foreach ($this->qrcodeData as $item1) {
                    $res['qrcodeData'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->qrcodeLocations) {
            if (\is_array($this->qrcodeLocations)) {
                $res['qrcodeLocations'] = [];
                $n1 = 0;
                foreach ($this->qrcodeLocations as $item1) {
                    $res['qrcodeLocations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sfaceData) {
            if (\is_array($this->sfaceData)) {
                $res['sfaceData'] = [];
                $n1 = 0;
                foreach ($this->sfaceData as $item1) {
                    $res['sfaceData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['frames'] as $item1) {
                    $model->frames[$n1++] = frames::fromMap($item1);
                }
            }
        }

        if (isset($map['hintWordsInfo'])) {
            if (!empty($map['hintWordsInfo'])) {
                $model->hintWordsInfo = [];
                $n1 = 0;
                foreach ($map['hintWordsInfo'] as $item1) {
                    $model->hintWordsInfo[$n1++] = hintWordsInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['logoData'])) {
            if (!empty($map['logoData'])) {
                $model->logoData = [];
                $n1 = 0;
                foreach ($map['logoData'] as $item1) {
                    $model->logoData[$n1++] = logoData::fromMap($item1);
                }
            }
        }

        if (isset($map['ocrData'])) {
            if (!empty($map['ocrData'])) {
                $model->ocrData = [];
                $n1 = 0;
                foreach ($map['ocrData'] as $item1) {
                    $model->ocrData[$n1++] = $item1;
                }
            }
        }

        if (isset($map['programCodeData'])) {
            if (!empty($map['programCodeData'])) {
                $model->programCodeData = [];
                $n1 = 0;
                foreach ($map['programCodeData'] as $item1) {
                    $model->programCodeData[$n1++] = programCodeData::fromMap($item1);
                }
            }
        }

        if (isset($map['qrcodeData'])) {
            if (!empty($map['qrcodeData'])) {
                $model->qrcodeData = [];
                $n1 = 0;
                foreach ($map['qrcodeData'] as $item1) {
                    $model->qrcodeData[$n1++] = $item1;
                }
            }
        }

        if (isset($map['qrcodeLocations'])) {
            if (!empty($map['qrcodeLocations'])) {
                $model->qrcodeLocations = [];
                $n1 = 0;
                foreach ($map['qrcodeLocations'] as $item1) {
                    $model->qrcodeLocations[$n1++] = qrcodeLocations::fromMap($item1);
                }
            }
        }

        if (isset($map['sfaceData'])) {
            if (!empty($map['sfaceData'])) {
                $model->sfaceData = [];
                $n1 = 0;
                foreach ($map['sfaceData'] as $item1) {
                    $model->sfaceData[$n1++] = sfaceData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
