<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody\modelFailed\apiImportModelFailed;

class modelFailed extends Model
{
    /**
     * @var apiImportModelFailed[]
     */
    public $apiImportModelFailed;
    protected $_name = [
        'apiImportModelFailed' => 'ApiImportModelFailed',
    ];

    public function validate()
    {
        if (\is_array($this->apiImportModelFailed)) {
            Model::validateArray($this->apiImportModelFailed);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiImportModelFailed) {
            if (\is_array($this->apiImportModelFailed)) {
                $res['ApiImportModelFailed'] = [];
                $n1                          = 0;
                foreach ($this->apiImportModelFailed as $item1) {
                    $res['ApiImportModelFailed'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiImportModelFailed'])) {
            if (!empty($map['ApiImportModelFailed'])) {
                $model->apiImportModelFailed = [];
                $n1                          = 0;
                foreach ($map['ApiImportModelFailed'] as $item1) {
                    $model->apiImportModelFailed[$n1++] = apiImportModelFailed::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
