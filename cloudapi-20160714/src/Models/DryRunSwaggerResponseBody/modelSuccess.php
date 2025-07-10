<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\modelSuccess\apiImportModelSuccess;

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
        if (\is_array($this->apiImportModelSuccess)) {
            Model::validateArray($this->apiImportModelSuccess);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiImportModelSuccess) {
            if (\is_array($this->apiImportModelSuccess)) {
                $res['ApiImportModelSuccess'] = [];
                $n1 = 0;
                foreach ($this->apiImportModelSuccess as $item1) {
                    $res['ApiImportModelSuccess'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiImportModelSuccess'])) {
            if (!empty($map['ApiImportModelSuccess'])) {
                $model->apiImportModelSuccess = [];
                $n1 = 0;
                foreach ($map['ApiImportModelSuccess'] as $item1) {
                    $model->apiImportModelSuccess[$n1] = apiImportModelSuccess::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
