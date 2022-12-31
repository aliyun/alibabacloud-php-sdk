<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteMediaInfosRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $deletePhysicalFiles;

    /**
     * @var string
     */
    public $inputURLs;

    /**
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
