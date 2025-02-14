<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\bindingConfig\autoMatchUserProfileExpressions;

class bindingConfig extends Model
{
    /**
     * @var autoMatchUserProfileExpressions[]
     */
    public $autoMatchUserProfileExpressions;
    /**
     * @var string
     */
    public $autoMatchUserStatus;
    /**
     * @var string
     */
    public $mappingBindingStatus;
    protected $_name = [
        'autoMatchUserProfileExpressions' => 'AutoMatchUserProfileExpressions',
        'autoMatchUserStatus'             => 'AutoMatchUserStatus',
        'mappingBindingStatus'            => 'MappingBindingStatus',
    ];

    public function validate()
    {
        if (\is_array($this->autoMatchUserProfileExpressions)) {
            Model::validateArray($this->autoMatchUserProfileExpressions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoMatchUserProfileExpressions) {
            if (\is_array($this->autoMatchUserProfileExpressions)) {
                $res['AutoMatchUserProfileExpressions'] = [];
                $n1                                     = 0;
                foreach ($this->autoMatchUserProfileExpressions as $item1) {
                    $res['AutoMatchUserProfileExpressions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->autoMatchUserStatus) {
            $res['AutoMatchUserStatus'] = $this->autoMatchUserStatus;
        }

        if (null !== $this->mappingBindingStatus) {
            $res['MappingBindingStatus'] = $this->mappingBindingStatus;
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
        if (isset($map['AutoMatchUserProfileExpressions'])) {
            if (!empty($map['AutoMatchUserProfileExpressions'])) {
                $model->autoMatchUserProfileExpressions = [];
                $n1                                     = 0;
                foreach ($map['AutoMatchUserProfileExpressions'] as $item1) {
                    $model->autoMatchUserProfileExpressions[$n1++] = autoMatchUserProfileExpressions::fromMap($item1);
                }
            }
        }

        if (isset($map['AutoMatchUserStatus'])) {
            $model->autoMatchUserStatus = $map['AutoMatchUserStatus'];
        }

        if (isset($map['MappingBindingStatus'])) {
            $model->mappingBindingStatus = $map['MappingBindingStatus'];
        }

        return $model;
    }
}
