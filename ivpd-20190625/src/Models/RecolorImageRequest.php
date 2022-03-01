<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecolorImageRequest\colorTemplate;
use AlibabaCloud\Tea\Model;

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
        'colorCount'    => 'ColorCount',
        'colorTemplate' => 'ColorTemplate',
        'mode'          => 'Mode',
        'refUrl'        => 'RefUrl',
        'url'           => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->colorCount) {
            $res['ColorCount'] = $this->colorCount;
        }
        if (null !== $this->colorTemplate) {
            $res['ColorTemplate'] = [];
            if (null !== $this->colorTemplate && \is_array($this->colorTemplate)) {
                $n = 0;
                foreach ($this->colorTemplate as $item) {
                    $res['ColorTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return RecolorImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColorCount'])) {
            $model->colorCount = $map['ColorCount'];
        }
        if (isset($map['ColorTemplate'])) {
            if (!empty($map['ColorTemplate'])) {
                $model->colorTemplate = [];
                $n                    = 0;
                foreach ($map['ColorTemplate'] as $item) {
                    $model->colorTemplate[$n++] = null !== $item ? colorTemplate::fromMap($item) : $item;
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
