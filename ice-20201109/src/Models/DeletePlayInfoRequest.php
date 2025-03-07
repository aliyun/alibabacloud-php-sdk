<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeletePlayInfoRequest extends Model
{
    /**
     * @description Specifies whether to delete the physical file of the media stream.
     *
     * You can delete only the physical files of transcoded streams, but not the physical files of source files.
     * @example false
     *
     * @var bool
     */
    public $deletePhysicalFiles;

    /**
     * @description The URL of the media stream file that you want to delete. Separate multiple URLs with commas (,).
     *
     * @example https://ice-test001.oss-cn-shanghai.aliyuncs.com/%E6%8E%A5%E5%8F%A3%E6%B5%8B%E8%AF%95/%E5%B0%8F%E7%8C%AA%E4%BD%A9%E5%A5%87640*360.mp4
     *
     * @var string
     */
    public $fileURLs;

    /**
     * @description The ID of the media asset.
     *
     * @example 1d3518e0027d71ed80cd909598416303
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'deletePhysicalFiles' => 'DeletePhysicalFiles',
        'fileURLs'            => 'FileURLs',
        'mediaId'             => 'MediaId',
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
        if (null !== $this->fileURLs) {
            $res['FileURLs'] = $this->fileURLs;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePlayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletePhysicalFiles'])) {
            $model->deletePhysicalFiles = $map['DeletePhysicalFiles'];
        }
        if (isset($map['FileURLs'])) {
            $model->fileURLs = $map['FileURLs'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
