<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adImages\adImage;
use AlibabaCloud\Tea\Model;

class adImages extends Model
{
    /**
     * @var adImage[]
     */
    public $adImage;
    protected $_name = [
        'adImage' => 'AdImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adImage) {
            $res['AdImage'] = [];
            if (null !== $this->adImage && \is_array($this->adImage)) {
                $n = 0;
                foreach ($this->adImage as $item) {
                    $res['AdImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdImage'])) {
            if (!empty($map['AdImage'])) {
                $model->adImage = [];
                $n              = 0;
                foreach ($map['AdImage'] as $item) {
                    $model->adImage[$n++] = null !== $item ? adImage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
