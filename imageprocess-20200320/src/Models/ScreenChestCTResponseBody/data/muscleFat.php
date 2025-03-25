<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\Dara\Model;

class muscleFat extends Model
{
    /**
     * @var int
     */
    public $FAT_TYPE;

    /**
     * @var string
     */
    public $MASK_PATH;

    /**
     * @var int
     */
    public $MUSCLE_MASS;

    /**
     * @var int
     */
    public $MUSCLE_QUALITY;

    /**
     * @var float
     */
    public $NAMA_TAMA_INDEX_TSCORE;

    /**
     * @var float
     */
    public $PERCENT_IMAT;

    /**
     * @var float
     */
    public $PERCENT_LAMA;

    /**
     * @var float
     */
    public $PERCENT_NAMA;

    /**
     * @var string
     */
    public $RENDERING_PATH;

    /**
     * @var float
     */
    public $SFA;

    /**
     * @var float
     */
    public $SFT;

    /**
     * @var float
     */
    public $SMA;

    /**
     * @var float
     */
    public $SMI;

    /**
     * @var int
     */
    public $STUDY_AGE;

    /**
     * @var string
     */
    public $STUDY_GENDER;

    /**
     * @var string
     */
    public $seriesInstanceUid;

    /**
     * @var float
     */
    public $VERTEBRA_IN_USE;

    /**
     * @var float
     */
    public $VFA;
    protected $_name = [
        'FAT_TYPE' => 'FAT_TYPE',
        'MASK_PATH' => 'MASK_PATH',
        'MUSCLE_MASS' => 'MUSCLE_MASS',
        'MUSCLE_QUALITY' => 'MUSCLE_QUALITY',
        'NAMA_TAMA_INDEX_TSCORE' => 'NAMA_TAMA_INDEX_TSCORE',
        'PERCENT_IMAT' => 'PERCENT_IMAT',
        'PERCENT_LAMA' => 'PERCENT_LAMA',
        'PERCENT_NAMA' => 'PERCENT_NAMA',
        'RENDERING_PATH' => 'RENDERING_PATH',
        'SFA' => 'SFA',
        'SFT' => 'SFT',
        'SMA' => 'SMA',
        'SMI' => 'SMI',
        'STUDY_AGE' => 'STUDY_AGE',
        'STUDY_GENDER' => 'STUDY_GENDER',
        'seriesInstanceUid' => 'SeriesInstanceUid',
        'VERTEBRA_IN_USE' => 'VERTEBRA_IN_USE',
        'VFA' => 'VFA',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->FAT_TYPE) {
            $res['FAT_TYPE'] = $this->FAT_TYPE;
        }

        if (null !== $this->MASK_PATH) {
            $res['MASK_PATH'] = $this->MASK_PATH;
        }

        if (null !== $this->MUSCLE_MASS) {
            $res['MUSCLE_MASS'] = $this->MUSCLE_MASS;
        }

        if (null !== $this->MUSCLE_QUALITY) {
            $res['MUSCLE_QUALITY'] = $this->MUSCLE_QUALITY;
        }

        if (null !== $this->NAMA_TAMA_INDEX_TSCORE) {
            $res['NAMA_TAMA_INDEX_TSCORE'] = $this->NAMA_TAMA_INDEX_TSCORE;
        }

        if (null !== $this->PERCENT_IMAT) {
            $res['PERCENT_IMAT'] = $this->PERCENT_IMAT;
        }

        if (null !== $this->PERCENT_LAMA) {
            $res['PERCENT_LAMA'] = $this->PERCENT_LAMA;
        }

        if (null !== $this->PERCENT_NAMA) {
            $res['PERCENT_NAMA'] = $this->PERCENT_NAMA;
        }

        if (null !== $this->RENDERING_PATH) {
            $res['RENDERING_PATH'] = $this->RENDERING_PATH;
        }

        if (null !== $this->SFA) {
            $res['SFA'] = $this->SFA;
        }

        if (null !== $this->SFT) {
            $res['SFT'] = $this->SFT;
        }

        if (null !== $this->SMA) {
            $res['SMA'] = $this->SMA;
        }

        if (null !== $this->SMI) {
            $res['SMI'] = $this->SMI;
        }

        if (null !== $this->STUDY_AGE) {
            $res['STUDY_AGE'] = $this->STUDY_AGE;
        }

        if (null !== $this->STUDY_GENDER) {
            $res['STUDY_GENDER'] = $this->STUDY_GENDER;
        }

        if (null !== $this->seriesInstanceUid) {
            $res['SeriesInstanceUid'] = $this->seriesInstanceUid;
        }

        if (null !== $this->VERTEBRA_IN_USE) {
            $res['VERTEBRA_IN_USE'] = $this->VERTEBRA_IN_USE;
        }

        if (null !== $this->VFA) {
            $res['VFA'] = $this->VFA;
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
        if (isset($map['FAT_TYPE'])) {
            $model->FAT_TYPE = $map['FAT_TYPE'];
        }

        if (isset($map['MASK_PATH'])) {
            $model->MASK_PATH = $map['MASK_PATH'];
        }

        if (isset($map['MUSCLE_MASS'])) {
            $model->MUSCLE_MASS = $map['MUSCLE_MASS'];
        }

        if (isset($map['MUSCLE_QUALITY'])) {
            $model->MUSCLE_QUALITY = $map['MUSCLE_QUALITY'];
        }

        if (isset($map['NAMA_TAMA_INDEX_TSCORE'])) {
            $model->NAMA_TAMA_INDEX_TSCORE = $map['NAMA_TAMA_INDEX_TSCORE'];
        }

        if (isset($map['PERCENT_IMAT'])) {
            $model->PERCENT_IMAT = $map['PERCENT_IMAT'];
        }

        if (isset($map['PERCENT_LAMA'])) {
            $model->PERCENT_LAMA = $map['PERCENT_LAMA'];
        }

        if (isset($map['PERCENT_NAMA'])) {
            $model->PERCENT_NAMA = $map['PERCENT_NAMA'];
        }

        if (isset($map['RENDERING_PATH'])) {
            $model->RENDERING_PATH = $map['RENDERING_PATH'];
        }

        if (isset($map['SFA'])) {
            $model->SFA = $map['SFA'];
        }

        if (isset($map['SFT'])) {
            $model->SFT = $map['SFT'];
        }

        if (isset($map['SMA'])) {
            $model->SMA = $map['SMA'];
        }

        if (isset($map['SMI'])) {
            $model->SMI = $map['SMI'];
        }

        if (isset($map['STUDY_AGE'])) {
            $model->STUDY_AGE = $map['STUDY_AGE'];
        }

        if (isset($map['STUDY_GENDER'])) {
            $model->STUDY_GENDER = $map['STUDY_GENDER'];
        }

        if (isset($map['SeriesInstanceUid'])) {
            $model->seriesInstanceUid = $map['SeriesInstanceUid'];
        }

        if (isset($map['VERTEBRA_IN_USE'])) {
            $model->VERTEBRA_IN_USE = $map['VERTEBRA_IN_USE'];
        }

        if (isset($map['VFA'])) {
            $model->VFA = $map['VFA'];
        }

        return $model;
    }
}
