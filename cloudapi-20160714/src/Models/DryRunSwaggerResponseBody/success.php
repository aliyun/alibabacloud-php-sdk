<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\success\apiDryRunSwaggerSuccess;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDryRunSwaggerSuccess) {
            $res['ApiDryRunSwaggerSuccess'] = [];
            if (null !== $this->apiDryRunSwaggerSuccess && \is_array($this->apiDryRunSwaggerSuccess)) {
                $n = 0;
                foreach ($this->apiDryRunSwaggerSuccess as $item) {
                    $res['ApiDryRunSwaggerSuccess'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ApiDryRunSwaggerSuccess'])) {
            if (!empty($map['ApiDryRunSwaggerSuccess'])) {
                $model->apiDryRunSwaggerSuccess = [];
                $n                              = 0;
                foreach ($map['ApiDryRunSwaggerSuccess'] as $item) {
                    $model->apiDryRunSwaggerSuccess[$n++] = null !== $item ? apiDryRunSwaggerSuccess::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
