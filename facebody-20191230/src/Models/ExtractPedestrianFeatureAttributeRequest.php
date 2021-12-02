<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttributeRequest\urlList;
use AlibabaCloud\Tea\Model;

class ExtractPedestrianFeatureAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var urlList[]
     */
    public $urlList;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'mode'     => 'Mode',
        'urlList'  => 'UrlList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->urlList) {
            $res['UrlList'] = [];
            if (null !== $this->urlList && \is_array($this->urlList)) {
                $n = 0;
                foreach ($this->urlList as $item) {
                    $res['UrlList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtractPedestrianFeatureAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['UrlList'])) {
            if (!empty($map['UrlList'])) {
                $model->urlList = [];
                $n              = 0;
                foreach ($map['UrlList'] as $item) {
                    $model->urlList[$n++] = null !== $item ? urlList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
