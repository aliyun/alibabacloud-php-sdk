<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest\advancedConfig;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest\idCardConfig;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest\internationalIdCardConfig;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest\multiLanConfig;
use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeAllTextRequest extends Model
{
    /**
     * @var advancedConfig
     */
    public $advancedConfig;

    /**
     * @var idCardConfig
     */
    public $idCardConfig;

    /**
     * @var internationalIdCardConfig
     */
    public $internationalIdCardConfig;

    /**
     * @var multiLanConfig
     */
    public $multiLanConfig;

    /**
     * @var bool
     */
    public $outputBarCode;

    /**
     * @var int[]
     */
    public $outputCoordinate;

    /**
     * @example false
     *
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
    public $type;

    /**
     * @example https://img.alicdn.com/tfs/TB1Wo7eXAvoK1RjSZFDXXXY3pXa-2512-3509.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'advancedConfig'            => 'AdvancedConfig',
        'idCardConfig'              => 'IdCardConfig',
        'internationalIdCardConfig' => 'InternationalIdCardConfig',
        'multiLanConfig'            => 'MultiLanConfig',
        'outputBarCode'             => 'OutputBarCode',
        'outputCoordinate'          => 'OutputCoordinate',
        'outputFigure'              => 'OutputFigure',
        'outputKVExcel'             => 'OutputKVExcel',
        'outputOricoord'            => 'OutputOricoord',
        'outputQrcode'              => 'OutputQrcode',
        'outputStamp'               => 'OutputStamp',
        'pageNo'                    => 'PageNo',
        'type'                      => 'Type',
        'url'                       => 'Url',
        'body'                      => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedConfig) {
            $res['AdvancedConfig'] = null !== $this->advancedConfig ? $this->advancedConfig->toMap() : null;
        }
        if (null !== $this->idCardConfig) {
            $res['IdCardConfig'] = null !== $this->idCardConfig ? $this->idCardConfig->toMap() : null;
        }
        if (null !== $this->internationalIdCardConfig) {
            $res['InternationalIdCardConfig'] = null !== $this->internationalIdCardConfig ? $this->internationalIdCardConfig->toMap() : null;
        }
        if (null !== $this->multiLanConfig) {
            $res['MultiLanConfig'] = null !== $this->multiLanConfig ? $this->multiLanConfig->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return RecognizeAllTextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedConfig'])) {
            $model->advancedConfig = advancedConfig::fromMap($map['AdvancedConfig']);
        }
        if (isset($map['IdCardConfig'])) {
            $model->idCardConfig = idCardConfig::fromMap($map['IdCardConfig']);
        }
        if (isset($map['InternationalIdCardConfig'])) {
            $model->internationalIdCardConfig = internationalIdCardConfig::fromMap($map['InternationalIdCardConfig']);
        }
        if (isset($map['MultiLanConfig'])) {
            $model->multiLanConfig = multiLanConfig::fromMap($map['MultiLanConfig']);
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
