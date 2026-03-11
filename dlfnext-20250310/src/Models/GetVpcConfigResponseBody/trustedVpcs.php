<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models\GetVpcConfigResponseBody;

use AlibabaCloud\Dara\Model;

class trustedVpcs extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string[]
     */
    public $extendedOptions;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'createdAt' => 'createdAt',
        'extendedOptions' => 'extendedOptions',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        if (\is_array($this->extendedOptions)) {
            Model::validateArray($this->extendedOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->extendedOptions) {
            if (\is_array($this->extendedOptions)) {
                $res['extendedOptions'] = [];
                foreach ($this->extendedOptions as $key1 => $value1) {
                    $res['extendedOptions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['extendedOptions'])) {
            if (!empty($map['extendedOptions'])) {
                $model->extendedOptions = [];
                foreach ($map['extendedOptions'] as $key1 => $value1) {
                    $model->extendedOptions[$key1] = $value1;
                }
            }
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
