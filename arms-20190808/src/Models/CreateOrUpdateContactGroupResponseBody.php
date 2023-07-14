<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactGroupResponseBody\alertContactGroup;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateContactGroupResponseBody extends Model
{
    /**
     * @description The information about the alert contact group.
     *
     * @var alertContactGroup
     */
    public $alertContactGroup;

    /**
     * @description The request ID.
     *
     * @example 9319A57D-2D9E-472A-B69B-CF3CD16D****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertContactGroup' => 'AlertContactGroup',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertContactGroup) {
            $res['AlertContactGroup'] = null !== $this->alertContactGroup ? $this->alertContactGroup->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateContactGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertContactGroup'])) {
            $model->alertContactGroup = alertContactGroup::fromMap($map['AlertContactGroup']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
