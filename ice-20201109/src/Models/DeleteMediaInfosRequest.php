<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteMediaInfosRequest extends Model
{
    /**
     * @description Specifies whether to delete the physical file of the media asset.
     *
     * If the media asset is stored in your own OSS bucket, you must authorize the service role AliyunICEDefaultRole in advance. For more information<props="china">, see [Authorize IMS to delete recording files in OSS](https://help.aliyun.com/zh/ims/user-guide/record?spm=a2c4g.11186623.0.i8#0737d9c437bmn).
     * @example false
     *
     * @var bool
     */
    public $deletePhysicalFiles;

    /**
     * @description The URL of the media asset that you want to delete. The file corresponding to the URL must be registered with IMS. Separate multiple URLs with commas (,). The following two formats are supported:
     *
     * In this format, it is considered by default that the region of the OSS bucket in which the media asset resides is the same as the region in which IMS is activated.
     * @var string
     */
    public $inputURLs;

    /**
     * @description The ID of the media asset that you want to delete from Intelligent Media Services (IMS).
     *
     *   Separate multiple IDs with commas (,).
     *
     * If you leave MediaIds empty, you must specify InputURLs.
     * @example ****20b48fb04483915d4f2cd8ac****,****15d4a4b0448391508f2cb486****
     *
     * @var string
     */
    public $mediaIds;
    protected $_name = [
        'deletePhysicalFiles' => 'DeletePhysicalFiles',
        'inputURLs'           => 'InputURLs',
        'mediaIds'            => 'MediaIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletePhysicalFiles) {
            $res['DeletePhysicalFiles'] = $this->deletePhysicalFiles;
        }
        if (null !== $this->inputURLs) {
            $res['InputURLs'] = $this->inputURLs;
        }
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMediaInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletePhysicalFiles'])) {
            $model->deletePhysicalFiles = $map['DeletePhysicalFiles'];
        }
        if (isset($map['InputURLs'])) {
            $model->inputURLs = $map['InputURLs'];
        }
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        return $model;
    }
}
