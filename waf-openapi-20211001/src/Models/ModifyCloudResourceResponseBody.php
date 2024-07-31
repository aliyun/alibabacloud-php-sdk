<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudResourceResponseBody extends Model
{
    /**
     * @example lb-xxx-80-clb7
     *
     * @var string
     */
    public $cloudResource;

    /**
     * @example D7861F61-5B61-46CE-A47C-***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudResource' => 'CloudResource',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudResource) {
            $res['CloudResource'] = $this->cloudResource;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudResource'])) {
            $model->cloudResource = $map['CloudResource'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
