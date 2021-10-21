<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\supplements\supplements;

use AlibabaCloud\Tea\Model;

class fileTemplateUrls extends Model
{
    /**
     * @var string[]
     */
    public $fileTemplateUrls;
    protected $_name = [
        'fileTemplateUrls' => 'FileTemplateUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileTemplateUrls) {
            $res['FileTemplateUrls'] = $this->fileTemplateUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileTemplateUrls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileTemplateUrls'])) {
            if (!empty($map['FileTemplateUrls'])) {
                $model->fileTemplateUrls = $map['FileTemplateUrls'];
            }
        }

        return $model;
    }
}
