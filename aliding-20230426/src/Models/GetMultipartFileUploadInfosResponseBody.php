<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosResponseBody\multipartHeaderSignatureInfos;
use AlibabaCloud\Tea\Model;

class GetMultipartFileUploadInfosResponseBody extends Model
{
    /**
     * @var multipartHeaderSignatureInfos[]
     */
    public $multipartHeaderSignatureInfos;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'multipartHeaderSignatureInfos' => 'multipartHeaderSignatureInfos',
        'requestId'                     => 'requestId',
        'vendorRequestId'               => 'vendorRequestId',
        'vendorType'                    => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multipartHeaderSignatureInfos) {
            $res['multipartHeaderSignatureInfos'] = [];
            if (null !== $this->multipartHeaderSignatureInfos && \is_array($this->multipartHeaderSignatureInfos)) {
                $n = 0;
                foreach ($this->multipartHeaderSignatureInfos as $item) {
                    $res['multipartHeaderSignatureInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultipartFileUploadInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['multipartHeaderSignatureInfos'])) {
            if (!empty($map['multipartHeaderSignatureInfos'])) {
                $model->multipartHeaderSignatureInfos = [];
                $n                                    = 0;
                foreach ($map['multipartHeaderSignatureInfos'] as $item) {
                    $model->multipartHeaderSignatureInfos[$n++] = null !== $item ? multipartHeaderSignatureInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
