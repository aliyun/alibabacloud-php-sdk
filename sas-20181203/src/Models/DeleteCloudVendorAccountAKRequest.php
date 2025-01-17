<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteCloudVendorAccountAKRequest extends Model
{
    /**
     * @var int
     */
    public $authId;
    /**
     * @var string[]
     */
    public $authModules;
    protected $_name = [
        'authId'      => 'AuthId',
        'authModules' => 'AuthModules',
    ];

    public function validate()
    {
        if (\is_array($this->authModules)) {
            Model::validateArray($this->authModules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }

        if (null !== $this->authModules) {
            if (\is_array($this->authModules)) {
                $res['AuthModules'] = [];
                $n1                 = 0;
                foreach ($this->authModules as $item1) {
                    $res['AuthModules'][$n1++] = $item1;
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
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }

        if (isset($map['AuthModules'])) {
            if (!empty($map['AuthModules'])) {
                $model->authModules = [];
                $n1                 = 0;
                foreach ($map['AuthModules'] as $item1) {
                    $model->authModules[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
