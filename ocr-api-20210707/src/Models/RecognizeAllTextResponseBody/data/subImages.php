<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\kvInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\paragraphInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qualityInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\rowInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\subImagePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\subImageRect;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo;

class subImages extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var barCodeInfo
     */
    public $barCodeInfo;

    /**
     * @var blockInfo
     */
    public $blockInfo;

    /**
     * @var DataSubImagesFigureInfoValue[]
     */
    public $figureInfo;

    /**
     * @var kvInfo
     */
    public $kvInfo;

    /**
     * @var paragraphInfo
     */
    public $paragraphInfo;

    /**
     * @var qrCodeInfo
     */
    public $qrCodeInfo;

    /**
     * @var qualityInfo
     */
    public $qualityInfo;

    /**
     * @var rowInfo
     */
    public $rowInfo;

    /**
     * @var stampInfo
     */
    public $stampInfo;

    /**
     * @var int
     */
    public $subImageId;

    /**
     * @var subImagePoints[]
     */
    public $subImagePoints;

    /**
     * @var subImageRect
     */
    public $subImageRect;

    /**
     * @var tableInfo
     */
    public $tableInfo;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'angle' => 'Angle',
        'barCodeInfo' => 'BarCodeInfo',
        'blockInfo' => 'BlockInfo',
        'figureInfo' => 'FigureInfo',
        'kvInfo' => 'KvInfo',
        'paragraphInfo' => 'ParagraphInfo',
        'qrCodeInfo' => 'QrCodeInfo',
        'qualityInfo' => 'QualityInfo',
        'rowInfo' => 'RowInfo',
        'stampInfo' => 'StampInfo',
        'subImageId' => 'SubImageId',
        'subImagePoints' => 'SubImagePoints',
        'subImageRect' => 'SubImageRect',
        'tableInfo' => 'TableInfo',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->barCodeInfo) {
            $this->barCodeInfo->validate();
        }
        if (null !== $this->blockInfo) {
            $this->blockInfo->validate();
        }
        if (\is_array($this->figureInfo)) {
            Model::validateArray($this->figureInfo);
        }
        if (null !== $this->kvInfo) {
            $this->kvInfo->validate();
        }
        if (null !== $this->paragraphInfo) {
            $this->paragraphInfo->validate();
        }
        if (null !== $this->qrCodeInfo) {
            $this->qrCodeInfo->validate();
        }
        if (null !== $this->qualityInfo) {
            $this->qualityInfo->validate();
        }
        if (null !== $this->rowInfo) {
            $this->rowInfo->validate();
        }
        if (null !== $this->stampInfo) {
            $this->stampInfo->validate();
        }
        if (\is_array($this->subImagePoints)) {
            Model::validateArray($this->subImagePoints);
        }
        if (null !== $this->subImageRect) {
            $this->subImageRect->validate();
        }
        if (null !== $this->tableInfo) {
            $this->tableInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }

        if (null !== $this->barCodeInfo) {
            $res['BarCodeInfo'] = null !== $this->barCodeInfo ? $this->barCodeInfo->toArray($noStream) : $this->barCodeInfo;
        }

        if (null !== $this->blockInfo) {
            $res['BlockInfo'] = null !== $this->blockInfo ? $this->blockInfo->toArray($noStream) : $this->blockInfo;
        }

        if (null !== $this->figureInfo) {
            if (\is_array($this->figureInfo)) {
                $res['FigureInfo'] = [];
                foreach ($this->figureInfo as $key1 => $value1) {
                    $res['FigureInfo'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->kvInfo) {
            $res['KvInfo'] = null !== $this->kvInfo ? $this->kvInfo->toArray($noStream) : $this->kvInfo;
        }

        if (null !== $this->paragraphInfo) {
            $res['ParagraphInfo'] = null !== $this->paragraphInfo ? $this->paragraphInfo->toArray($noStream) : $this->paragraphInfo;
        }

        if (null !== $this->qrCodeInfo) {
            $res['QrCodeInfo'] = null !== $this->qrCodeInfo ? $this->qrCodeInfo->toArray($noStream) : $this->qrCodeInfo;
        }

        if (null !== $this->qualityInfo) {
            $res['QualityInfo'] = null !== $this->qualityInfo ? $this->qualityInfo->toArray($noStream) : $this->qualityInfo;
        }

        if (null !== $this->rowInfo) {
            $res['RowInfo'] = null !== $this->rowInfo ? $this->rowInfo->toArray($noStream) : $this->rowInfo;
        }

        if (null !== $this->stampInfo) {
            $res['StampInfo'] = null !== $this->stampInfo ? $this->stampInfo->toArray($noStream) : $this->stampInfo;
        }

        if (null !== $this->subImageId) {
            $res['SubImageId'] = $this->subImageId;
        }

        if (null !== $this->subImagePoints) {
            if (\is_array($this->subImagePoints)) {
                $res['SubImagePoints'] = [];
                $n1 = 0;
                foreach ($this->subImagePoints as $item1) {
                    $res['SubImagePoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->subImageRect) {
            $res['SubImageRect'] = null !== $this->subImageRect ? $this->subImageRect->toArray($noStream) : $this->subImageRect;
        }

        if (null !== $this->tableInfo) {
            $res['TableInfo'] = null !== $this->tableInfo ? $this->tableInfo->toArray($noStream) : $this->tableInfo;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }

        if (isset($map['BarCodeInfo'])) {
            $model->barCodeInfo = barCodeInfo::fromMap($map['BarCodeInfo']);
        }

        if (isset($map['BlockInfo'])) {
            $model->blockInfo = blockInfo::fromMap($map['BlockInfo']);
        }

        if (isset($map['FigureInfo'])) {
            if (!empty($map['FigureInfo'])) {
                $model->figureInfo = [];
                foreach ($map['FigureInfo'] as $key1 => $value1) {
                    $model->figureInfo[$key1] = DataSubImagesFigureInfoValue::fromMap($value1);
                }
            }
        }

        if (isset($map['KvInfo'])) {
            $model->kvInfo = kvInfo::fromMap($map['KvInfo']);
        }

        if (isset($map['ParagraphInfo'])) {
            $model->paragraphInfo = paragraphInfo::fromMap($map['ParagraphInfo']);
        }

        if (isset($map['QrCodeInfo'])) {
            $model->qrCodeInfo = qrCodeInfo::fromMap($map['QrCodeInfo']);
        }

        if (isset($map['QualityInfo'])) {
            $model->qualityInfo = qualityInfo::fromMap($map['QualityInfo']);
        }

        if (isset($map['RowInfo'])) {
            $model->rowInfo = rowInfo::fromMap($map['RowInfo']);
        }

        if (isset($map['StampInfo'])) {
            $model->stampInfo = stampInfo::fromMap($map['StampInfo']);
        }

        if (isset($map['SubImageId'])) {
            $model->subImageId = $map['SubImageId'];
        }

        if (isset($map['SubImagePoints'])) {
            if (!empty($map['SubImagePoints'])) {
                $model->subImagePoints = [];
                $n1 = 0;
                foreach ($map['SubImagePoints'] as $item1) {
                    $model->subImagePoints[$n1++] = subImagePoints::fromMap($item1);
                }
            }
        }

        if (isset($map['SubImageRect'])) {
            $model->subImageRect = subImageRect::fromMap($map['SubImageRect']);
        }

        if (isset($map['TableInfo'])) {
            $model->tableInfo = tableInfo::fromMap($map['TableInfo']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
