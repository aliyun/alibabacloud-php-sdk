<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleTemplateResponseBody\serviceLinkedRoleTemplate;
use AlibabaCloud\Tea\Model;

class GetServiceLinkedRoleTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceLinkedRoleTemplate
     */
    public $serviceLinkedRoleTemplate;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'serviceLinkedRoleTemplate' => 'ServiceLinkedRoleTemplate',
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
        if (null !== $this->serviceLinkedRoleTemplate) {
            $res['ServiceLinkedRoleTemplate'] = null !== $this->serviceLinkedRoleTemplate ? $this->serviceLinkedRoleTemplate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceLinkedRoleTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceLinkedRoleTemplate'])) {
            $model->serviceLinkedRoleTemplate = serviceLinkedRoleTemplate::fromMap($map['ServiceLinkedRoleTemplate']);
        }

        return $model;
    }
}
