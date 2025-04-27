<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeAllTextShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $advancedConfigShrink;

    /**
     * @var string
     */
    public $idCardConfigShrink;

    /**
     * @var string
     */
    public $internationalBusinessLicenseConfigShrink;

    /**
     * @var string
     */
    public $internationalIdCardConfigShrink;

    /**
     * @var string
     */
    public $multiLanConfigShrink;

    /**
     * @var bool
     */
    public $outputBarCode;

    /**
     * @var string
     */
    public $outputCoordinate;

    /**
     * @var bool
     */
    public $outputFigure;

    /**
     * @var bool
     */
    public $outputKVExcel;

    /**
     * @var bool
     */
    public $outputOricoord;

    /**
     * @var bool
     */
    public $outputQrcode;

    /**
     * @var bool
     */
    public $outputStamp;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var string
     */
    public $tableConfigShrink;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'advancedConfigShrink' => 'AdvancedConfig',
        'idCardConfigShrink' => 'IdCardConfig',
        'internationalBusinessLicenseConfigShrink' => 'InternationalBusinessLicenseConfig',
        'internationalIdCardConfigShrink' => 'InternationalIdCardConfig',
        'multiLanConfigShrink' => 'MultiLanConfig',
        'outputBarCode' => 'OutputBarCode',
        'outputCoordinate' => 'OutputCoordinate',
        'outputFigure' => 'OutputFigure',
        'outputKVExcel' => 'OutputKVExcel',
        'outputOricoord' => 'OutputOricoord',
        'outputQrcode' => 'OutputQrcode',
        'outputStamp' => 'OutputStamp',
        'pageNo' => 'PageNo',
        'tableConfigShrink' => 'TableConfig',
        'type' => 'Type',
        'url' => 'Url',
        'body' => 'body',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedConfigShrink) {
            $res['AdvancedConfig'] = $this->advancedConfigShrink;
        }

        if (null !== $this->idCardConfigShrink) {
            $res['IdCardConfig'] = $this->idCardConfigShrink;
        }

        if (null !== $this->internationalBusinessLicenseConfigShrink) {
            $res['InternationalBusinessLicenseConfig'] = $this->internationalBusinessLicenseConfigShrink;
        }

        if (null !== $this->internationalIdCardConfigShrink) {
            $res['InternationalIdCardConfig'] = $this->internationalIdCardConfigShrink;
        }

        if (null !== $this->multiLanConfigShrink) {
            $res['MultiLanConfig'] = $this->multiLanConfigShrink;
        }

        if (null !== $this->outputBarCode) {
            $res['OutputBarCode'] = $this->outputBarCode;
        }

        if (null !== $this->outputCoordinate) {
            $res['OutputCoordinate'] = $this->outputCoordinate;
        }

        if (null !== $this->outputFigure) {
            $res['OutputFigure'] = $this->outputFigure;
        }

        if (null !== $this->outputKVExcel) {
            $res['OutputKVExcel'] = $this->outputKVExcel;
        }

        if (null !== $this->outputOricoord) {
            $res['OutputOricoord'] = $this->outputOricoord;
        }

        if (null !== $this->outputQrcode) {
            $res['OutputQrcode'] = $this->outputQrcode;
        }

        if (null !== $this->outputStamp) {
            $res['OutputStamp'] = $this->outputStamp;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->tableConfigShrink) {
            $res['TableConfig'] = $this->tableConfigShrink;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->body) {
            $res['body'] = $this->body;
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
        if (isset($map['AdvancedConfig'])) {
            $model->advancedConfigShrink = $map['AdvancedConfig'];
        }

        if (isset($map['IdCardConfig'])) {
            $model->idCardConfigShrink = $map['IdCardConfig'];
        }

        if (isset($map['InternationalBusinessLicenseConfig'])) {
            $model->internationalBusinessLicenseConfigShrink = $map['InternationalBusinessLicenseConfig'];
        }

        if (isset($map['InternationalIdCardConfig'])) {
            $model->internationalIdCardConfigShrink = $map['InternationalIdCardConfig'];
        }

        if (isset($map['MultiLanConfig'])) {
            $model->multiLanConfigShrink = $map['MultiLanConfig'];
        }

        if (isset($map['OutputBarCode'])) {
            $model->outputBarCode = $map['OutputBarCode'];
        }

        if (isset($map['OutputCoordinate'])) {
            $model->outputCoordinate = $map['OutputCoordinate'];
        }

        if (isset($map['OutputFigure'])) {
            $model->outputFigure = $map['OutputFigure'];
        }

        if (isset($map['OutputKVExcel'])) {
            $model->outputKVExcel = $map['OutputKVExcel'];
        }

        if (isset($map['OutputOricoord'])) {
            $model->outputOricoord = $map['OutputOricoord'];
        }

        if (isset($map['OutputQrcode'])) {
            $model->outputQrcode = $map['OutputQrcode'];
        }

        if (isset($map['OutputStamp'])) {
            $model->outputStamp = $map['OutputStamp'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['TableConfig'])) {
            $model->tableConfigShrink = $map['TableConfig'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
