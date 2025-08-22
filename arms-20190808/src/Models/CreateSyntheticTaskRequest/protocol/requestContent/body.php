<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent\body\formData;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent\body\urlEncoding;

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
        'formData' => 'FormData',
        'language' => 'Language',
        'mode' => 'Mode',
        'raw' => 'Raw',
        'urlEncoding' => 'UrlEncoding',
    ];

    public function validate()
    {
        if (\is_array($this->formData)) {
            Model::validateArray($this->formData);
        }
        if (\is_array($this->urlEncoding)) {
            Model::validateArray($this->urlEncoding);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formData) {
            if (\is_array($this->formData)) {
                $res['FormData'] = [];
                $n1 = 0;
                foreach ($this->formData as $item1) {
                    $res['FormData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->urlEncoding)) {
                $res['UrlEncoding'] = [];
                $n1 = 0;
                foreach ($this->urlEncoding as $item1) {
                    $res['UrlEncoding'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FormData'])) {
            if (!empty($map['FormData'])) {
                $model->formData = [];
                $n1 = 0;
                foreach ($map['FormData'] as $item1) {
                    $model->formData[$n1] = formData::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['UrlEncoding'] as $item1) {
                    $model->urlEncoding[$n1] = urlEncoding::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
