<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\logConfig\sls;

class logConfig extends Model
{
    /**
     * @var sls
     */
    public $sls;
    protected $_name = [
        'sls' => 'sls',
    ];

    public function validate()
    {
        if (null !== $this->sls) {
            $this->sls->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sls) {
            $res['sls'] = null !== $this->sls ? $this->sls->toArray($noStream) : $this->sls;
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
        if (isset($map['sls'])) {
            $model->sls = sls::fromMap($map['sls']);
        }

        return $model;
    }
}
