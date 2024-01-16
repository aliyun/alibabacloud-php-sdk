<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeComponentsJsResponseBody extends Model
{
    /**
     * @description The configuration of the JavaScript file for the component.
     *
     * @example [
     * ]
     * @var string
     */
    public $componentsJs;

    /**
     * @description The request ID.
     *
     * @example 58A518BC-E4A8-5BD7-AFEA-366046ED9073
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'componentsJs' => 'ComponentsJs',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentsJs) {
            $res['ComponentsJs'] = $this->componentsJs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComponentsJsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentsJs'])) {
            $model->componentsJs = $map['ComponentsJs'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
