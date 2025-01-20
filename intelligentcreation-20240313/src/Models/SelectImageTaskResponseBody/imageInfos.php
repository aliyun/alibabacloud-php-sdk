<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectImageTaskResponseBody;

use AlibabaCloud\Dara\Model;

class imageInfos extends Model
{
    /**
     * @var string
     */
    public $customImageUrl;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $imageH;
    /**
     * @var string
     */
    public $imageW;
    protected $_name = [
        'customImageUrl' => 'customImageUrl',
        'gmtCreate'      => 'gmtCreate',
        'imageH'         => 'imageH',
        'imageW'         => 'imageW',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customImageUrl) {
            $res['customImageUrl'] = $this->customImageUrl;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->imageH) {
            $res['imageH'] = $this->imageH;
        }

        if (null !== $this->imageW) {
            $res['imageW'] = $this->imageW;
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
        if (isset($map['customImageUrl'])) {
            $model->customImageUrl = $map['customImageUrl'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['imageH'])) {
            $model->imageH = $map['imageH'];
        }

        if (isset($map['imageW'])) {
            $model->imageW = $map['imageW'];
        }

        return $model;
    }
}
