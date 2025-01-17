<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateRegistryListResponseBody\imageRegistryInfos;

class ListPrivateRegistryListResponseBody extends Model
{
    /**
     * @var imageRegistryInfos[]
     */
    public $imageRegistryInfos;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageRegistryInfos' => 'ImageRegistryInfos',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->imageRegistryInfos)) {
            Model::validateArray($this->imageRegistryInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageRegistryInfos) {
            if (\is_array($this->imageRegistryInfos)) {
                $res['ImageRegistryInfos'] = [];
                $n1                        = 0;
                foreach ($this->imageRegistryInfos as $item1) {
                    $res['ImageRegistryInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ImageRegistryInfos'])) {
            if (!empty($map['ImageRegistryInfos'])) {
                $model->imageRegistryInfos = [];
                $n1                        = 0;
                foreach ($map['ImageRegistryInfos'] as $item1) {
                    $model->imageRegistryInfos[$n1++] = imageRegistryInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
