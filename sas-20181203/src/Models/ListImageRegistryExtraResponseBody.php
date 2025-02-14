<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRegistryExtraResponseBody\imageRegistryExtraInfos;

class ListImageRegistryExtraResponseBody extends Model
{
    /**
     * @var imageRegistryExtraInfos[]
     */
    public $imageRegistryExtraInfos;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageRegistryExtraInfos' => 'ImageRegistryExtraInfos',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->imageRegistryExtraInfos)) {
            Model::validateArray($this->imageRegistryExtraInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageRegistryExtraInfos) {
            if (\is_array($this->imageRegistryExtraInfos)) {
                $res['ImageRegistryExtraInfos'] = [];
                $n1                             = 0;
                foreach ($this->imageRegistryExtraInfos as $item1) {
                    $res['ImageRegistryExtraInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageRegistryExtraInfos'])) {
            if (!empty($map['ImageRegistryExtraInfos'])) {
                $model->imageRegistryExtraInfos = [];
                $n1                             = 0;
                foreach ($map['ImageRegistryExtraInfos'] as $item1) {
                    $model->imageRegistryExtraInfos[$n1++] = imageRegistryExtraInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
