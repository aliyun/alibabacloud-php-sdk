<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageRequest\colorTemplate;

class RecolorImageRequest extends Model
{
    /**
     * @var int
     */
    public $colorCount;

    /**
     * @var colorTemplate[]
     */
    public $colorTemplate;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $refUrl;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'colorCount' => 'ColorCount',
        'colorTemplate' => 'ColorTemplate',
        'mode' => 'Mode',
        'refUrl' => 'RefUrl',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->colorTemplate)) {
            Model::validateArray($this->colorTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->colorCount) {
            $res['ColorCount'] = $this->colorCount;
        }

        if (null !== $this->colorTemplate) {
            if (\is_array($this->colorTemplate)) {
                $res['ColorTemplate'] = [];
                $n1 = 0;
                foreach ($this->colorTemplate as $item1) {
                    $res['ColorTemplate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->refUrl) {
            $res['RefUrl'] = $this->refUrl;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['ColorCount'])) {
            $model->colorCount = $map['ColorCount'];
        }

        if (isset($map['ColorTemplate'])) {
            if (!empty($map['ColorTemplate'])) {
                $model->colorTemplate = [];
                $n1 = 0;
                foreach ($map['ColorTemplate'] as $item1) {
                    $model->colorTemplate[$n1] = colorTemplate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['RefUrl'])) {
            $model->refUrl = $map['RefUrl'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
