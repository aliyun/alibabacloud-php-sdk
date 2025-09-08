<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class UnbindSlbRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $internet;

    /**
     * @var bool
     */
    public $intranet;
    protected $_name = [
        'appId' => 'AppId',
        'internet' => 'Internet',
        'intranet' => 'Intranet',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
