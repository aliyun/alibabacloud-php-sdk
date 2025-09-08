<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\textInImage;

use AlibabaCloud\Dara\Model;

class customText extends Model
{
    /**
     * @var string
     */
    public $keyWords;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $libName;
    protected $_name = [
        'keyWords' => 'KeyWords',
        'libId' => 'LibId',
        'libName' => 'LibName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
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
        if (isset($map['KeyWords'])) {
            $model->keyWords = $map['KeyWords'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }

        return $model;
    }
}
