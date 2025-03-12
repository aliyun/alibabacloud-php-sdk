<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateRegistryListResponseBody\imageRegistryInfos;
use AlibabaCloud\Tea\Model;

class ListPrivateRegistryListResponseBody extends Model
{
    /**
     * @description An array that consists of the image repositories.
     *
     * @var imageRegistryInfos[]
     */
    public $imageRegistryInfos;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example BE120DAB-F4E7-4C53-ADC3-A97578AB****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageRegistryInfos' => 'ImageRegistryInfos',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageRegistryInfos) {
            $res['ImageRegistryInfos'] = [];
            if (null !== $this->imageRegistryInfos && \is_array($this->imageRegistryInfos)) {
                $n = 0;
                foreach ($this->imageRegistryInfos as $item) {
                    $res['ImageRegistryInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateRegistryListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageRegistryInfos'])) {
            if (!empty($map['ImageRegistryInfos'])) {
                $model->imageRegistryInfos = [];
                $n                         = 0;
                foreach ($map['ImageRegistryInfos'] as $item) {
                    $model->imageRegistryInfos[$n++] = null !== $item ? imageRegistryInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
