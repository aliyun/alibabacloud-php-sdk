<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class ListRegionsRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   **zh-CN** (default): Chinese
     *   **en-US**: English
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        return $model;
    }
}
