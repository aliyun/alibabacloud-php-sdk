<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data\textInImage;

use AlibabaCloud\Tea\Model;

class customTexts extends Model
{
    /**
     * @description Custom words, multiple words separated by commas.
     *
     * @example aaa,bbb
     *
     * @var string
     */
    public $keyWords;

    /**
     * @description Custom library ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $libId;

    /**
     * @description Custom library name.
     *
     * @example test
     *
     * @var string
     */
    public $libName;
    protected $_name = [
        'keyWords' => 'KeyWords',
        'libId'    => 'LibId',
        'libName'  => 'LibName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return customTexts
     */
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
