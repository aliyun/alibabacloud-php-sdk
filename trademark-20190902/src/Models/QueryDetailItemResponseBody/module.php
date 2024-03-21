<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\QueryDetailItemResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryDetailItemResponseBody\module\attributes;
use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryDetailItemResponseBody\module\detailPicUrl;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var attributes
     */
    public $attributes;

    /**
     * @var string
     */
    public $detailDescription;

    /**
     * @var string
     */
    public $detailObjectJson;

    /**
     * @var string
     */
    public $detailPagePicUrl;

    /**
     * @var detailPicUrl
     */
    public $detailPicUrl;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'attributes'        => 'Attributes',
        'detailDescription' => 'DetailDescription',
        'detailObjectJson'  => 'DetailObjectJson',
        'detailPagePicUrl'  => 'DetailPagePicUrl',
        'detailPicUrl'      => 'DetailPicUrl',
        'label'             => 'Label',
        'mainPicUrl'        => 'MainPicUrl',
        'title'             => 'Title',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = null !== $this->attributes ? $this->attributes->toMap() : null;
        }
        if (null !== $this->detailDescription) {
            $res['DetailDescription'] = $this->detailDescription;
        }
        if (null !== $this->detailObjectJson) {
            $res['DetailObjectJson'] = $this->detailObjectJson;
        }
        if (null !== $this->detailPagePicUrl) {
            $res['DetailPagePicUrl'] = $this->detailPagePicUrl;
        }
        if (null !== $this->detailPicUrl) {
            $res['DetailPicUrl'] = null !== $this->detailPicUrl ? $this->detailPicUrl->toMap() : null;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = attributes::fromMap($map['Attributes']);
        }
        if (isset($map['DetailDescription'])) {
            $model->detailDescription = $map['DetailDescription'];
        }
        if (isset($map['DetailObjectJson'])) {
            $model->detailObjectJson = $map['DetailObjectJson'];
        }
        if (isset($map['DetailPagePicUrl'])) {
            $model->detailPagePicUrl = $map['DetailPagePicUrl'];
        }
        if (isset($map['DetailPicUrl'])) {
            $model->detailPicUrl = detailPicUrl::fromMap($map['DetailPicUrl']);
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
