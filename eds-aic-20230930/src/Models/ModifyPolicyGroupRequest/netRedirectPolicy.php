<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupRequest\netRedirectPolicy\netRedirectRule;
use AlibabaCloud\Tea\Model;

class netRedirectPolicy extends Model
{
    /**
     * @var string
     */
    public $netRedirect;

    /**
     * @var netRedirectRule[]
     */
    public $netRedirectRule;
    protected $_name = [
        'netRedirect'     => 'NetRedirect',
        'netRedirectRule' => 'NetRedirectRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netRedirect) {
            $res['NetRedirect'] = $this->netRedirect;
        }
        if (null !== $this->netRedirectRule) {
            $res['NetRedirectRule'] = [];
            if (null !== $this->netRedirectRule && \is_array($this->netRedirectRule)) {
                $n = 0;
                foreach ($this->netRedirectRule as $item) {
                    $res['NetRedirectRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netRedirectPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetRedirect'])) {
            $model->netRedirect = $map['NetRedirect'];
        }
        if (isset($map['NetRedirectRule'])) {
            if (!empty($map['NetRedirectRule'])) {
                $model->netRedirectRule = [];
                $n                      = 0;
                foreach ($map['NetRedirectRule'] as $item) {
                    $model->netRedirectRule[$n++] = null !== $item ? netRedirectRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
