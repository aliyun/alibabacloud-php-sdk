<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class CreateSampleRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $clientFileName;

    /**
     * @var string
     */
    public $clientPath;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sampleTag;

    /**
     * @var string
     */
    public $sampleType;

    /**
     * @var string
     */
    public $sampleValues;

    /**
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'lang'           => 'Lang',
        'clientFileName' => 'clientFileName',
        'clientPath'     => 'clientPath',
        'fileType'       => 'fileType',
        'regId'          => 'regId',
        'sampleTag'      => 'sampleTag',
        'sampleType'     => 'sampleType',
        'sampleValues'   => 'sampleValues',
        'uploadType'     => 'uploadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->clientFileName) {
            $res['clientFileName'] = $this->clientFileName;
        }
        if (null !== $this->clientPath) {
            $res['clientPath'] = $this->clientPath;
        }
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->sampleTag) {
            $res['sampleTag'] = $this->sampleTag;
        }
        if (null !== $this->sampleType) {
            $res['sampleType'] = $this->sampleType;
        }
        if (null !== $this->sampleValues) {
            $res['sampleValues'] = $this->sampleValues;
        }
        if (null !== $this->uploadType) {
            $res['uploadType'] = $this->uploadType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSampleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['clientFileName'])) {
            $model->clientFileName = $map['clientFileName'];
        }
        if (isset($map['clientPath'])) {
            $model->clientPath = $map['clientPath'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['sampleTag'])) {
            $model->sampleTag = $map['sampleTag'];
        }
        if (isset($map['sampleType'])) {
            $model->sampleType = $map['sampleType'];
        }
        if (isset($map['sampleValues'])) {
            $model->sampleValues = $map['sampleValues'];
        }
        if (isset($map['uploadType'])) {
            $model->uploadType = $map['uploadType'];
        }

        return $model;
    }
}
