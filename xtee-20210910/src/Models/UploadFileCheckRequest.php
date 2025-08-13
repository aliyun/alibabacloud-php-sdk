<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class UploadFileCheckRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $batchName;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sampleTagType;

    /**
     * @var string
     */
    public $serviceList;
    protected $_name = [
        'lang' => 'Lang',
        'batchName' => 'batchName',
        'dataType' => 'dataType',
        'ossFileName' => 'ossFileName',
        'regId' => 'regId',
        'sampleTagType' => 'sampleTagType',
        'serviceList' => 'serviceList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->batchName) {
            $res['batchName'] = $this->batchName;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->ossFileName) {
            $res['ossFileName'] = $this->ossFileName;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->sampleTagType) {
            $res['sampleTagType'] = $this->sampleTagType;
        }

        if (null !== $this->serviceList) {
            $res['serviceList'] = $this->serviceList;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['batchName'])) {
            $model->batchName = $map['batchName'];
        }

        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['ossFileName'])) {
            $model->ossFileName = $map['ossFileName'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['sampleTagType'])) {
            $model->sampleTagType = $map['sampleTagType'];
        }

        if (isset($map['serviceList'])) {
            $model->serviceList = $map['serviceList'];
        }

        return $model;
    }
}
