<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class initConfig extends Model
{
    /**
     * @var bool
     */
    public $enableWaf;
    /**
     * @var bool
     */
    public $supportWaf;
    protected $_name = [
        'enableWaf'  => 'EnableWaf',
        'supportWaf' => 'SupportWaf',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableWaf) {
            $res['EnableWaf'] = $this->enableWaf;
        }

        if (null !== $this->supportWaf) {
            $res['SupportWaf'] = $this->supportWaf;
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
        if (isset($map['EnableWaf'])) {
            $model->enableWaf = $map['EnableWaf'];
        }

        if (isset($map['SupportWaf'])) {
            $model->supportWaf = $map['SupportWaf'];
        }

        return $model;
    }
}
