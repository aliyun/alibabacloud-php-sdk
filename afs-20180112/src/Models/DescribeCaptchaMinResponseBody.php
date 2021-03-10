<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaMinResponseBody\captchaMins;
use AlibabaCloud\Tea\Model;

class DescribeCaptchaMinResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var captchaMins[]
     */
    public $captchaMins;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var bool
     */
    public $hasData;
    protected $_name = [
        'requestId'   => 'RequestId',
        'captchaMins' => 'CaptchaMins',
        'bizCode'     => 'BizCode',
        'hasData'     => 'HasData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->captchaMins) {
            $res['CaptchaMins'] = [];
            if (null !== $this->captchaMins && \is_array($this->captchaMins)) {
                $n = 0;
                foreach ($this->captchaMins as $item) {
                    $res['CaptchaMins'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->hasData) {
            $res['HasData'] = $this->hasData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCaptchaMinResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CaptchaMins'])) {
            if (!empty($map['CaptchaMins'])) {
                $model->captchaMins = [];
                $n                  = 0;
                foreach ($map['CaptchaMins'] as $item) {
                    $model->captchaMins[$n++] = null !== $item ? captchaMins::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['HasData'])) {
            $model->hasData = $map['HasData'];
        }

        return $model;
    }
}
