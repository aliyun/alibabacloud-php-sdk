<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody\failed\apiImportSwaggerFailed;
use AlibabaCloud\Tea\Model;

class failed extends Model
{
    /**
     * @var apiImportSwaggerFailed[]
     */
    public $apiImportSwaggerFailed;
    protected $_name = [
        'apiImportSwaggerFailed' => 'ApiImportSwaggerFailed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiImportSwaggerFailed) {
            $res['ApiImportSwaggerFailed'] = [];
            if (null !== $this->apiImportSwaggerFailed && \is_array($this->apiImportSwaggerFailed)) {
                $n = 0;
                foreach ($this->apiImportSwaggerFailed as $item) {
                    $res['ApiImportSwaggerFailed'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failed
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiImportSwaggerFailed'])) {
            if (!empty($map['ApiImportSwaggerFailed'])) {
                $model->apiImportSwaggerFailed = [];
                $n                             = 0;
                foreach ($map['ApiImportSwaggerFailed'] as $item) {
                    $model->apiImportSwaggerFailed[$n++] = null !== $item ? apiImportSwaggerFailed::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
