<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreatePidDataSourceAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $ossPathObject;

    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $openUpload;

    /**
     * @var int
     */
    public $needCreateTime;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $sampleTime;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'ossPathObject'  => 'OssPathObject',
        'pidProjectId'   => 'PidProjectId',
        'type'           => 'Type',
        'fileName'       => 'FileName',
        'openUpload'     => 'OpenUpload',
        'needCreateTime' => 'NeedCreateTime',
        'startDate'      => 'StartDate',
        'sampleTime'     => 'SampleTime',
        'clientToken'    => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('ossPathObject', $this->ossPathObject, true);
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('needCreateTime', $this->needCreateTime, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossPathObject) {
            $res['OssPathObject'] = $this->ossPathObject;
        }
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->openUpload) {
            $res['OpenUpload'] = $this->openUpload;
        }
        if (null !== $this->needCreateTime) {
            $res['NeedCreateTime'] = $this->needCreateTime;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->sampleTime) {
            $res['SampleTime'] = $this->sampleTime;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePidDataSourceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssPathObject'])) {
            $model->ossPathObject = $map['OssPathObject'];
        }
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['OpenUpload'])) {
            $model->openUpload = $map['OpenUpload'];
        }
        if (isset($map['NeedCreateTime'])) {
            $model->needCreateTime = $map['NeedCreateTime'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SampleTime'])) {
            $model->sampleTime = $map['SampleTime'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
