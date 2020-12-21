<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoComposeTaskRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $imageFileNames;

    /**
     * @var string
     */
    public $audioFileName;

    /**
     * @var string
     */
    public $imageParameters;

    /**
     * @var string
     */
    public $videoFormat;

    /**
     * @var int
     */
    public $videoFrameRate;
    protected $_name = [
        'corpId'          => 'CorpId',
        'bucketName'      => 'BucketName',
        'domainName'      => 'DomainName',
        'imageFileNames'  => 'ImageFileNames',
        'audioFileName'   => 'AudioFileName',
        'imageParameters' => 'ImageParameters',
        'videoFormat'     => 'VideoFormat',
        'videoFrameRate'  => 'VideoFrameRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->imageFileNames) {
            $res['ImageFileNames'] = $this->imageFileNames;
        }
        if (null !== $this->audioFileName) {
            $res['AudioFileName'] = $this->audioFileName;
        }
        if (null !== $this->imageParameters) {
            $res['ImageParameters'] = $this->imageParameters;
        }
        if (null !== $this->videoFormat) {
            $res['VideoFormat'] = $this->videoFormat;
        }
        if (null !== $this->videoFrameRate) {
            $res['VideoFrameRate'] = $this->videoFrameRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoComposeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ImageFileNames'])) {
            $model->imageFileNames = $map['ImageFileNames'];
        }
        if (isset($map['AudioFileName'])) {
            $model->audioFileName = $map['AudioFileName'];
        }
        if (isset($map['ImageParameters'])) {
            $model->imageParameters = $map['ImageParameters'];
        }
        if (isset($map['VideoFormat'])) {
            $model->videoFormat = $map['VideoFormat'];
        }
        if (isset($map['VideoFrameRate'])) {
            $model->videoFrameRate = $map['VideoFrameRate'];
        }

        return $model;
    }
}
