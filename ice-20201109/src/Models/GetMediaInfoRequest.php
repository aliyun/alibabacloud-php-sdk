<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetMediaInfoRequest extends Model
{
    /**
     * @description The input URL of the media asset in another service. The URL must be registered in the IMS content library and bound to the ID of the media asset in IMS.
     *
     *   For a media asset from Object Storage Service (OSS), the URL may have one of the following formats:
     *
     * oss://example-bucket/example.mp4. The second format indicates that the region in which the OSS bucket of the media asset resides is the same as the region in which OSS is activated.
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.mp4
     *
     * @var string
     */
    public $inputURL;

    /**
     * @description The ID of the media asset in IMS. If this parameter is left empty, the InputURL parameter must be specified.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The type of the URL of the media asset to return in the response. Valid values:
     *
     *   oss (default): an OSS URL.
     *   cdn: a CDN URL. A CDN URL is returned only if the media asset is imported from ApsaraVideo VOD and the relevant domain name is an accelerated domain name in ApsaraVideo VOD.
     *
     * @example cdn
     *
     * @var string
     */
    public $outputType;

    /**
     * @description Specifies whether to return detailed information for specific media asset attributes. Supported attributes: AiRoughData.StandardSmartTagJob, which specifies whether to return detailed tag information if a tagging job has been submitted for the media asset. Valid values for the attribute:
     *
     *   false (default): The job result is returned as a URL.
     *   true: The job result is returned as text.
     *
     * @example {"AiRoughData.StandardSmartTagJob": false}
     *
     * @var string
     */
    public $returnDetailedInfo;
    protected $_name = [
        'inputURL'           => 'InputURL',
        'mediaId'            => 'MediaId',
        'outputType'         => 'OutputType',
        'returnDetailedInfo' => 'ReturnDetailedInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->returnDetailedInfo) {
            $res['ReturnDetailedInfo'] = $this->returnDetailedInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['ReturnDetailedInfo'])) {
            $model->returnDetailedInfo = $map['ReturnDetailedInfo'];
        }

        return $model;
    }
}
