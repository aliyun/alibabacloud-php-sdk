<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppLayoutRequest\layout;
use AlibabaCloud\Tea\Model;

class DeleteAppLayoutRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ac7N****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var layout
     */
    public $layout;
    protected $_name = [
        'appId'       => 'AppId',
        'clientToken' => 'ClientToken',
        'layout'      => 'Layout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->layout) {
            $res['Layout'] = null !== $this->layout ? $this->layout->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppLayoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Layout'])) {
            $model->layout = layout::fromMap($map['Layout']);
        }

        return $model;
    }
}
