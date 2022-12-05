<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetLogoFontListResponseBody\fonts;
use AlibabaCloud\Tea\Model;

class GetLogoFontListResponseBody extends Model
{
    /**
     * @var fonts[]
     */
    public $fonts;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'fonts'     => 'Fonts',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fonts) {
            $res['Fonts'] = [];
            if (null !== $this->fonts && \is_array($this->fonts)) {
                $n = 0;
                foreach ($this->fonts as $item) {
                    $res['Fonts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetLogoFontListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fonts'])) {
            if (!empty($map['Fonts'])) {
                $model->fonts = [];
                $n            = 0;
                foreach ($map['Fonts'] as $item) {
                    $model->fonts[$n++] = null !== $item ? fonts::fromMap($item) : $item;
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
