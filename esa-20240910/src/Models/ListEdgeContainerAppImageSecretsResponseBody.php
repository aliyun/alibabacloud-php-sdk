<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppImageSecretsResponseBody\imageSecretList;

class ListEdgeContainerAppImageSecretsResponseBody extends Model
{
    /**
     * @var imageSecretList[]
     */
    public $imageSecretList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageSecretList' => 'ImageSecretList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->imageSecretList)) {
            Model::validateArray($this->imageSecretList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageSecretList) {
            if (\is_array($this->imageSecretList)) {
                $res['ImageSecretList'] = [];
                $n1 = 0;
                foreach ($this->imageSecretList as $item1) {
                    $res['ImageSecretList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ImageSecretList'])) {
            if (!empty($map['ImageSecretList'])) {
                $model->imageSecretList = [];
                $n1 = 0;
                foreach ($map['ImageSecretList'] as $item1) {
                    $model->imageSecretList[$n1] = imageSecretList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
