<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody\modelSuccess\apiImportModelSuccess;
use AlibabaCloud\Tea\Model;

class modelSuccess extends Model
{
    /**
     * @var apiImportModelSuccess[]
     */
    public $apiImportModelSuccess;
    protected $_name = [
        'apiImportModelSuccess' => 'ApiImportModelSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiImportModelSuccess) {
            $res['ApiImportModelSuccess'] = [];
            if (null !== $this->apiImportModelSuccess && \is_array($this->apiImportModelSuccess)) {
                $n = 0;
                foreach ($this->apiImportModelSuccess as $item) {
                    $res['ApiImportModelSuccess'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelSuccess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiImportModelSuccess'])) {
            if (!empty($map['ApiImportModelSuccess'])) {
                $model->apiImportModelSuccess = [];
                $n                            = 0;
                foreach ($map['ApiImportModelSuccess'] as $item) {
                    $model->apiImportModelSuccess[$n++] = null !== $item ? apiImportModelSuccess::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
