<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponseBody\affectedMaliciousFileImagesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeAffectedMaliciousFileImagesResponseBody extends Model
{
    /**
     * @description An array consisting of the images that have malicious image samples.
     *
     * @var affectedMaliciousFileImagesResponse[]
     */
    public $affectedMaliciousFileImagesResponse;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example ACF97412-FD09-4D1F-994F-34DF12BREF20
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'affectedMaliciousFileImagesResponse' => 'AffectedMaliciousFileImagesResponse',
        'pageInfo'                            => 'PageInfo',
        'requestId'                           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectedMaliciousFileImagesResponse) {
            $res['AffectedMaliciousFileImagesResponse'] = [];
            if (null !== $this->affectedMaliciousFileImagesResponse && \is_array($this->affectedMaliciousFileImagesResponse)) {
                $n = 0;
                foreach ($this->affectedMaliciousFileImagesResponse as $item) {
                    $res['AffectedMaliciousFileImagesResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAffectedMaliciousFileImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectedMaliciousFileImagesResponse'])) {
            if (!empty($map['AffectedMaliciousFileImagesResponse'])) {
                $model->affectedMaliciousFileImagesResponse = [];
                $n                                          = 0;
                foreach ($map['AffectedMaliciousFileImagesResponse'] as $item) {
                    $model->affectedMaliciousFileImagesResponse[$n++] = null !== $item ? affectedMaliciousFileImagesResponse::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
