<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnBlockedRegionsRequest extends Model
{
    /**
     * @description The language. Valid values: zh, en, and jp.
     *
     * This parameter is required.
     * @example zh
     *
     * @var string
     */
    public $language;
    protected $_name = [
        'language' => 'Language',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnBlockedRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
