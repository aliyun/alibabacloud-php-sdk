<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListProvisionConfigsRequest extends Model
{
    /**
     * @description The maximum number of resources to return. Default value: 20. Maximum value: 100. The number of returned resources is less than or equal to the specified number.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The token used to obtain more results. You do not need to provide this parameter in the first call. The tokens for subsequent queries are obtained from the returned results.
     *
     * @example demoNextToken
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The qualifier of the service to which resources belong. The qualifier must be aliasName and used together with the serviceName parameter.
     *
     * @example prod
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description The name of the service to which resources belong.
     *
     * @example serviceName
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'limit'       => 'limit',
        'nextToken'   => 'nextToken',
        'qualifier'   => 'qualifier',
        'serviceName' => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProvisionConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
