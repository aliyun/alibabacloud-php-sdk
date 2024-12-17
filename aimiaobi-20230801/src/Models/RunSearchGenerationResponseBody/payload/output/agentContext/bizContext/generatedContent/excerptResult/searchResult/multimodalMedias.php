<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult;

use AlibabaCloud\Tea\Model;

class multimodalMedias extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example xx
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example image
     *
     * @var string
     */
    public $mediaType;
    protected $_name = [
        'fileUrl'   => 'FileUrl',
        'mediaId'   => 'MediaId',
        'mediaType' => 'MediaType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multimodalMedias
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        return $model;
    }
}
