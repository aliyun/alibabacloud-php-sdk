<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmExtractTaskRequest;

use AlibabaCloud\Tea\Model;

class imageExtractParamsOpenApi extends Model
{
    /**
     * @var string
     */
    public $srcLogoBase64;
    protected $_name = [
        'srcLogoBase64' => 'SrcLogoBase64',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->srcLogoBase64) {
            $res['SrcLogoBase64'] = $this->srcLogoBase64;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageExtractParamsOpenApi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SrcLogoBase64'])) {
            $model->srcLogoBase64 = $map['SrcLogoBase64'];
        }

        return $model;
    }
}
