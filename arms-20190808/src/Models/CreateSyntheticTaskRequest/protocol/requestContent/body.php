<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent\body\formData;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent\body\urlEncoding;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var formData[]
     */
    public $formData;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $raw;

    /**
     * @var urlEncoding[]
     */
    public $urlEncoding;
    protected $_name = [
        'formData'    => 'FormData',
        'language'    => 'Language',
        'mode'        => 'Mode',
        'raw'         => 'Raw',
        'urlEncoding' => 'UrlEncoding',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->formData) {
            $res['FormData'] = [];
            if (null !== $this->formData && \is_array($this->formData)) {
                $n = 0;
                foreach ($this->formData as $item) {
                    $res['FormData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->raw) {
            $res['Raw'] = $this->raw;
        }
        if (null !== $this->urlEncoding) {
            $res['UrlEncoding'] = [];
            if (null !== $this->urlEncoding && \is_array($this->urlEncoding)) {
                $n = 0;
                foreach ($this->urlEncoding as $item) {
                    $res['UrlEncoding'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FormData'])) {
            if (!empty($map['FormData'])) {
                $model->formData = [];
                $n               = 0;
                foreach ($map['FormData'] as $item) {
                    $model->formData[$n++] = null !== $item ? formData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Raw'])) {
            $model->raw = $map['Raw'];
        }
        if (isset($map['UrlEncoding'])) {
            if (!empty($map['UrlEncoding'])) {
                $model->urlEncoding = [];
                $n                  = 0;
                foreach ($map['UrlEncoding'] as $item) {
                    $model->urlEncoding[$n++] = null !== $item ? urlEncoding::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
