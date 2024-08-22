<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel;

use AlibabaCloud\Tea\Model;

class netRedirectPolicy extends Model
{
    /**
     * @var string
     */
    public $netRedirect;
    protected $_name = [
        'netRedirect' => 'NetRedirect',
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

        return $model;
    }
}
