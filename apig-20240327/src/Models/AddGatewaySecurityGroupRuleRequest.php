<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class AddGatewaySecurityGroupRuleRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string[]
     */
    public $portRanges;
    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'description'     => 'description',
        'portRanges'      => 'portRanges',
        'securityGroupId' => 'securityGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->portRanges)) {
            Model::validateArray($this->portRanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->portRanges) {
            if (\is_array($this->portRanges)) {
                $res['portRanges'] = [];
                $n1                = 0;
                foreach ($this->portRanges as $item1) {
                    $res['portRanges'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['portRanges'])) {
            if (!empty($map['portRanges'])) {
                $model->portRanges = [];
                $n1                = 0;
                foreach ($map['portRanges'] as $item1) {
                    $model->portRanges[$n1++] = $item1;
                }
            }
        }

        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        return $model;
    }
}
