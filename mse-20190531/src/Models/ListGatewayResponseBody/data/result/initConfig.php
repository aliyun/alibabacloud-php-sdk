<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class initConfig extends Model
{
    /**
     * @description Indicates whether Web Application Firewall (WAF) is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableWaf;

    /**
     * @description Indicates whether WAF is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportWaf;
    protected $_name = [
        'enableWaf'  => 'EnableWaf',
        'supportWaf' => 'SupportWaf',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return initConfig
     */
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
