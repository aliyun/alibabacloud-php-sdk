<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListLayersRequest extends Model
{
    /**
     * @description The maximum number of resources to return. Default value: 20. Maximum value: 100. The number of returned configurations is less than or equal to the specified number.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The token required to obtain more results. If the number of resources exceeds the limit, the nextToken parameter is returned. You can include the parameter in subsequent calls to obtain more results. You do not need to provide this parameter in the first call.
     *
     * @example next-layer-name
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Specifies whether to obtain the official public layer. When the official parameter is set to true, the public field does not take effect. The default value is false.
     *
     * @example true
     *
     * @var bool
     */
    public $official;

    /**
     * @description The name prefix of the layer. The names of returned resources must contain the prefix. If the name prefix is a, the names of returned resources must start with a.
     *
     * @example prefix-Layer
     *
     * @var string
     */
    public $prefix;

    /**
     * @description Specifies whether to obtain only the common layer. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $public;

    /**
     * @description The name of the start layer. The returned layers are sorted in alphabetical order, and the layers that include and follow the layer specified by the startKey parameter are returned.
     *
     * @example start-layer-name
     *
     * @var string
     */
    public $startKey;
    protected $_name = [
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
        'official'  => 'official',
        'prefix'    => 'prefix',
        'public'    => 'public',
        'startKey'  => 'startKey',
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
        if (null !== $this->official) {
            $res['official'] = $this->official;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->public) {
            $res['public'] = $this->public;
        }
        if (null !== $this->startKey) {
            $res['startKey'] = $this->startKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLayersRequest
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
        if (isset($map['official'])) {
            $model->official = $map['official'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['public'])) {
            $model->public = $map['public'];
        }
        if (isset($map['startKey'])) {
            $model->startKey = $map['startKey'];
        }

        return $model;
    }
}
