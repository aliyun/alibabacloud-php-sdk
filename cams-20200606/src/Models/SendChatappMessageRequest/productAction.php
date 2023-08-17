<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest;

use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest\productAction\sections;
use AlibabaCloud\Tea\Model;

class productAction extends Model
{
    /**
     * @var sections[]
     */
    public $sections;

    /**
     * @var string
     */
    public $thumbnailProductRetailerId;
    protected $_name = [
        'sections'                   => 'Sections',
        'thumbnailProductRetailerId' => 'ThumbnailProductRetailerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sections) {
            $res['Sections'] = [];
            if (null !== $this->sections && \is_array($this->sections)) {
                $n = 0;
                foreach ($this->sections as $item) {
                    $res['Sections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->thumbnailProductRetailerId) {
            $res['ThumbnailProductRetailerId'] = $this->thumbnailProductRetailerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sections'])) {
            if (!empty($map['Sections'])) {
                $model->sections = [];
                $n               = 0;
                foreach ($map['Sections'] as $item) {
                    $model->sections[$n++] = null !== $item ? sections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ThumbnailProductRetailerId'])) {
            $model->thumbnailProductRetailerId = $map['ThumbnailProductRetailerId'];
        }

        return $model;
    }
}
