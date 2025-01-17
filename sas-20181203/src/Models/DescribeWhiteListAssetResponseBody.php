<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListAssetResponseBody\assets;

class DescribeWhiteListAssetResponseBody extends Model
{
    /**
     * @var assets[]
     */
    public $assets;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assets'    => 'Assets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->assets)) {
            Model::validateArray($this->assets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assets) {
            if (\is_array($this->assets)) {
                $res['Assets'] = [];
                $n1            = 0;
                foreach ($this->assets as $item1) {
                    $res['Assets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Assets'])) {
            if (!empty($map['Assets'])) {
                $model->assets = [];
                $n1            = 0;
                foreach ($map['Assets'] as $item1) {
                    $model->assets[$n1++] = assets::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
