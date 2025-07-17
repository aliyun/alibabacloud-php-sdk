<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class GetTraceConfigRequest extends Model
{
    /**
     * @description Language Type:
     * zh: Chinese
     * en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;
    protected $_name = [
        'acceptLanguage' => 'acceptLanguage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['acceptLanguage'] = $this->acceptLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTraceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['acceptLanguage'])) {
            $model->acceptLanguage = $map['acceptLanguage'];
        }

        return $model;
    }
}
