<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeTemplateResourcesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example C7BC9373-3960-53B0-8968-2B13454AE18F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array of protected objects or protected object groups that are associated to the protection rule template.
     *
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTemplateResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = $map['Resources'];
            }
        }

        return $model;
    }
}
