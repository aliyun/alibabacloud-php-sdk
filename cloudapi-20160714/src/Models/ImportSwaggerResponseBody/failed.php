<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody\failed\apiImportSwaggerFailed;

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
        if (\is_array($this->apiImportSwaggerFailed)) {
            Model::validateArray($this->apiImportSwaggerFailed);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiImportSwaggerFailed) {
            if (\is_array($this->apiImportSwaggerFailed)) {
                $res['ApiImportSwaggerFailed'] = [];
                $n1 = 0;
                foreach ($this->apiImportSwaggerFailed as $item1) {
                    $res['ApiImportSwaggerFailed'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ApiImportSwaggerFailed'])) {
            if (!empty($map['ApiImportSwaggerFailed'])) {
                $model->apiImportSwaggerFailed = [];
                $n1 = 0;
                foreach ($map['ApiImportSwaggerFailed'] as $item1) {
                    $model->apiImportSwaggerFailed[$n1++] = apiImportSwaggerFailed::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
