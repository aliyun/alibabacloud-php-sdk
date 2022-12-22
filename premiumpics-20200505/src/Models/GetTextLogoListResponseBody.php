<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetTextLogoListResponseBody\logos;
use AlibabaCloud\Tea\Model;

class GetTextLogoListResponseBody extends Model
{
    /**
     * @example 5d6716ceb8cd4370a05e0a0e30f4cb78
     *
     * @var string
     */
    public $logoVersion;

    /**
     * @var logos[]
     */
    public $logos;

    /**
     * @example 88E0B72B-7EA8-5D8F-BDA5-27A01E0539F4
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'logoVersion' => 'LogoVersion',
        'logos'       => 'Logos',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoVersion) {
            $res['LogoVersion'] = $this->logoVersion;
        }
        if (null !== $this->logos) {
            $res['Logos'] = [];
            if (null !== $this->logos && \is_array($this->logos)) {
                $n = 0;
                foreach ($this->logos as $item) {
                    $res['Logos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTextLogoListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoVersion'])) {
            $model->logoVersion = $map['LogoVersion'];
        }
        if (isset($map['Logos'])) {
            if (!empty($map['Logos'])) {
                $model->logos = [];
                $n            = 0;
                foreach ($map['Logos'] as $item) {
                    $model->logos[$n++] = null !== $item ? logos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
