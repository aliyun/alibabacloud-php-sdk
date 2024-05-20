<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UnbindSlbRequest extends Model
{
    /**
     * @description true
     *
     * This parameter is required.
     * @example 0099b7be-5f5b-4512-a7fc-56049ef1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description true
     *
     * @example true
     *
     * @var bool
     */
    public $internet;

    /**
     * @description The ID of the request.
     *
     * @example true
     *
     * @var bool
     */
    public $intranet;
    protected $_name = [
        'appId'    => 'AppId',
        'internet' => 'Internet',
        'intranet' => 'Intranet',
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
        if (null !== $this->internet) {
            $res['Internet'] = $this->internet;
        }
        if (null !== $this->intranet) {
            $res['Intranet'] = $this->intranet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Internet'])) {
            $model->internet = $map['Internet'];
        }
        if (isset($map['Intranet'])) {
            $model->intranet = $map['Intranet'];
        }

        return $model;
    }
}
