<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosResponseBody\multipartHeaderSignatureInfos;

class GetMultipartFileUploadInfosResponseBody extends Model
{
    /**
     * @var multipartHeaderSignatureInfos[]
     */
    public $multipartHeaderSignatureInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'multipartHeaderSignatureInfos' => 'multipartHeaderSignatureInfos',
        'requestId' => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->multipartHeaderSignatureInfos)) {
            Model::validateArray($this->multipartHeaderSignatureInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->multipartHeaderSignatureInfos) {
            if (\is_array($this->multipartHeaderSignatureInfos)) {
                $res['multipartHeaderSignatureInfos'] = [];
                $n1 = 0;
                foreach ($this->multipartHeaderSignatureInfos as $item1) {
                    $res['multipartHeaderSignatureInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['multipartHeaderSignatureInfos'])) {
            if (!empty($map['multipartHeaderSignatureInfos'])) {
                $model->multipartHeaderSignatureInfos = [];
                $n1 = 0;
                foreach ($map['multipartHeaderSignatureInfos'] as $item1) {
                    $model->multipartHeaderSignatureInfos[$n1++] = multipartHeaderSignatureInfos::fromMap($item1);
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
