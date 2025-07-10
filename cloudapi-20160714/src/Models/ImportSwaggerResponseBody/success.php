<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody\success\apiImportSwaggerSuccess;

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
        if (\is_array($this->apiImportSwaggerSuccess)) {
            Model::validateArray($this->apiImportSwaggerSuccess);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiImportSwaggerSuccess) {
            if (\is_array($this->apiImportSwaggerSuccess)) {
                $res['ApiImportSwaggerSuccess'] = [];
                $n1 = 0;
                foreach ($this->apiImportSwaggerSuccess as $item1) {
                    $res['ApiImportSwaggerSuccess'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ApiImportSwaggerSuccess'])) {
            if (!empty($map['ApiImportSwaggerSuccess'])) {
                $model->apiImportSwaggerSuccess = [];
                $n1 = 0;
                foreach ($map['ApiImportSwaggerSuccess'] as $item1) {
                    $model->apiImportSwaggerSuccess[$n1] = apiImportSwaggerSuccess::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
