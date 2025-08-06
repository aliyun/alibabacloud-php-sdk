<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationGrantScopeResponseBody;

use AlibabaCloud\Dara\Model;

class applicationGrantScope extends Model
{
    /**
     * @var string[]
     */
    public $grantScopes;
    protected $_name = [
        'grantScopes' => 'GrantScopes',
    ];

    public function validate()
    {
        if (\is_array($this->grantScopes)) {
            Model::validateArray($this->grantScopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantScopes) {
            if (\is_array($this->grantScopes)) {
                $res['GrantScopes'] = [];
                $n1 = 0;
                foreach ($this->grantScopes as $item1) {
                    $res['GrantScopes'][$n1] = $item1;
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
        if (isset($map['GrantScopes'])) {
            if (!empty($map['GrantScopes'])) {
                $model->grantScopes = [];
                $n1 = 0;
                foreach ($map['GrantScopes'] as $item1) {
                    $model->grantScopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
