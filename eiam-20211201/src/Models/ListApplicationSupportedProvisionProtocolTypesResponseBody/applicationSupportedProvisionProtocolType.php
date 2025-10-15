<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationSupportedProvisionProtocolTypesResponseBody;

use AlibabaCloud\Dara\Model;

class applicationSupportedProvisionProtocolType extends Model
{
    /**
     * @var string[]
     */
    public $provisionProtocolType;
    protected $_name = [
        'provisionProtocolType' => 'ProvisionProtocolType',
    ];

    public function validate()
    {
        if (\is_array($this->provisionProtocolType)) {
            Model::validateArray($this->provisionProtocolType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->provisionProtocolType) {
            if (\is_array($this->provisionProtocolType)) {
                $res['ProvisionProtocolType'] = [];
                $n1 = 0;
                foreach ($this->provisionProtocolType as $item1) {
                    $res['ProvisionProtocolType'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ProvisionProtocolType'])) {
            if (!empty($map['ProvisionProtocolType'])) {
                $model->provisionProtocolType = [];
                $n1 = 0;
                foreach ($map['ProvisionProtocolType'] as $item1) {
                    $model->provisionProtocolType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
