<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\ListTargetsForPolicyResponseBody\targets;
use AlibabaCloud\Tea\Model;

class ListTargetsForPolicyResponseBody extends Model
{
    /**
     * @description Indicates whether the object belongs to the resource directory. Valid values:
     *
     *   true: The object belongs to the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *   false: The object does not belong to the resource directory. This value is available if you use the Tag Policy feature in single-account mode.
     *
     * @example true
     *
     * @var bool
     */
    public $isRd;

    /**
     * @description Indicates whether the next query is required.
     *
     *   If the value of this parameter is empty (`"NextToken": ""`), all results are returned, and the next query is not required.
     *   If the value of this parameter is not empty, the next query is required, and the value is the token used to start the next query.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the resource directory.
     *
     * >  This parameter is returned only if you use the Tag Policy feature in multi-account mode.
     * @example rd-3G****
     *
     * @var string
     */
    public $rdId;

    /**
     * @description The ID of the request.
     *
     * @example 2EE71C8D-6DB8-56AC-8B05-3D4C0116E6A1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The objects to which the tag policy is attached.
     *
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'isRd'      => 'IsRd',
        'nextToken' => 'NextToken',
        'rdId'      => 'RdId',
        'requestId' => 'RequestId',
        'targets'   => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isRd) {
            $res['IsRd'] = $this->isRd;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->rdId) {
            $res['RdId'] = $this->rdId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->targets) {
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTargetsForPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsRd'])) {
            $model->isRd = $map['IsRd'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RdId'])) {
            $model->rdId = $map['RdId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
