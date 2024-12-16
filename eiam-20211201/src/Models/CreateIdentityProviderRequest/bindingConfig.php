<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\bindingConfig\autoMatchUserProfileExpressions;
use AlibabaCloud\Tea\Model;

class bindingConfig extends Model
{
    /**
     * @description 自动匹配账户的规则
     *
     * @var autoMatchUserProfileExpressions[]
     */
    public $autoMatchUserProfileExpressions;

    /**
     * @description 自动匹配账户是否开启
     *
     * @example disabled
     *
     * @var string
     */
    public $autoMatchUserStatus;

    /**
     * @description 用户手动绑定账户功能是否开启
     *
     * @example enabled
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoMatchUserProfileExpressions) {
            $res['AutoMatchUserProfileExpressions'] = [];
            if (null !== $this->autoMatchUserProfileExpressions && \is_array($this->autoMatchUserProfileExpressions)) {
                $n = 0;
                foreach ($this->autoMatchUserProfileExpressions as $item) {
                    $res['AutoMatchUserProfileExpressions'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return bindingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoMatchUserProfileExpressions'])) {
            if (!empty($map['AutoMatchUserProfileExpressions'])) {
                $model->autoMatchUserProfileExpressions = [];
                $n                                      = 0;
                foreach ($map['AutoMatchUserProfileExpressions'] as $item) {
                    $model->autoMatchUserProfileExpressions[$n++] = null !== $item ? autoMatchUserProfileExpressions::fromMap($item) : $item;
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
