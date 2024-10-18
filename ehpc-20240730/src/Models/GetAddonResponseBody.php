<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponseBody\addon;
use AlibabaCloud\Tea\Model;

class GetAddonResponseBody extends Model
{
    /**
     * @description The details about the addon.
     *
     * @var addon
     */
    public $addon;

    /**
     * @description The request ID.
     *
     * @example BBC2F93D-003A-49C4-850C-B826EECF****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addon'     => 'Addon',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addon) {
            $res['Addon'] = null !== $this->addon ? $this->addon->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAddonResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addon'])) {
            $model->addon = addon::fromMap($map['Addon']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
