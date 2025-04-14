<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListWorkspaceRolesResponseBody\result;

use AlibabaCloud\Dara\Model;

class authConfigList extends Model
{
    /**
     * @var string[]
     */
    public $actionAuthKeys;

    /**
     * @var string
     */
    public $authKey;
    protected $_name = [
        'actionAuthKeys' => 'ActionAuthKeys',
        'authKey' => 'AuthKey',
    ];

    public function validate()
    {
        if (\is_array($this->actionAuthKeys)) {
            Model::validateArray($this->actionAuthKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionAuthKeys) {
            if (\is_array($this->actionAuthKeys)) {
                $res['ActionAuthKeys'] = [];
                $n1 = 0;
                foreach ($this->actionAuthKeys as $item1) {
                    $res['ActionAuthKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
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
        if (isset($map['ActionAuthKeys'])) {
            if (!empty($map['ActionAuthKeys'])) {
                $model->actionAuthKeys = [];
                $n1 = 0;
                foreach ($map['ActionAuthKeys'] as $item1) {
                    $model->actionAuthKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        return $model;
    }
}
