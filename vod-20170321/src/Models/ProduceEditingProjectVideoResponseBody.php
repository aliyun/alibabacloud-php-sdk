<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ProduceEditingProjectVideoResponseBody extends Model
{
    /**
     * @description The ID of the produced video.
     *
     * > *   This parameter is returned for each request.
     * > *   If a value is returned for this parameter, the video production task is being asynchronously processed.
     * @example 006204a11bb386bb25491f95f****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The ID of the online editing project.
     *
     * @example fb2101bf24b4cb318787dc****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaId'   => 'MediaId',
        'projectId' => 'ProjectId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProduceEditingProjectVideoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
