<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody\success\apiImportSwaggerSuccess;
use AlibabaCloud\Tea\Model;

class success extends Model
{
    /**
     * @var apiImportSwaggerSuccess[]
     */
    public $apiImportSwaggerSuccess;
    protected $_name = [
        'apiImportSwaggerSuccess' => 'ApiImportSwaggerSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiImportSwaggerSuccess) {
            $res['ApiImportSwaggerSuccess'] = [];
            if (null !== $this->apiImportSwaggerSuccess && \is_array($this->apiImportSwaggerSuccess)) {
                $n = 0;
                foreach ($this->apiImportSwaggerSuccess as $item) {
                    $res['ApiImportSwaggerSuccess'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return success
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiImportSwaggerSuccess'])) {
            if (!empty($map['ApiImportSwaggerSuccess'])) {
                $model->apiImportSwaggerSuccess = [];
                $n                              = 0;
                foreach ($map['ApiImportSwaggerSuccess'] as $item) {
                    $model->apiImportSwaggerSuccess[$n++] = null !== $item ? apiImportSwaggerSuccess::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
