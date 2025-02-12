<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\success\apiDryRunSwaggerSuccess;

class success extends Model
{
    /**
     * @var apiDryRunSwaggerSuccess[]
     */
    public $apiDryRunSwaggerSuccess;
    protected $_name = [
        'apiDryRunSwaggerSuccess' => 'ApiDryRunSwaggerSuccess',
    ];

    public function validate()
    {
        if (\is_array($this->apiDryRunSwaggerSuccess)) {
            Model::validateArray($this->apiDryRunSwaggerSuccess);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiDryRunSwaggerSuccess) {
            if (\is_array($this->apiDryRunSwaggerSuccess)) {
                $res['ApiDryRunSwaggerSuccess'] = [];
                $n1                             = 0;
                foreach ($this->apiDryRunSwaggerSuccess as $item1) {
                    $res['ApiDryRunSwaggerSuccess'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiDryRunSwaggerSuccess'])) {
            if (!empty($map['ApiDryRunSwaggerSuccess'])) {
                $model->apiDryRunSwaggerSuccess = [];
                $n1                             = 0;
                foreach ($map['ApiDryRunSwaggerSuccess'] as $item1) {
                    $model->apiDryRunSwaggerSuccess[$n1++] = apiDryRunSwaggerSuccess::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
