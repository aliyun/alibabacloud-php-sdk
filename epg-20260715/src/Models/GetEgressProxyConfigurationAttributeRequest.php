<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;

class GetEgressProxyConfigurationAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $egressProxyConfigurationId;
    protected $_name = [
        'egressProxyConfigurationId' => 'EgressProxyConfigurationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyConfigurationId) {
            $res['EgressProxyConfigurationId'] = $this->egressProxyConfigurationId;
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
        if (isset($map['EgressProxyConfigurationId'])) {
            $model->egressProxyConfigurationId = $map['EgressProxyConfigurationId'];
        }

        return $model;
    }
}
