<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest;

use AlibabaCloud\Dara\Model;

class videoRoles extends Model
{
    /**
     * @var string
     */
    public $roleInfo;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string[]
     */
    public $urls;
    protected $_name = [
        'roleInfo' => 'roleInfo',
        'roleName' => 'roleName',
        'urls' => 'urls',
    ];

    public function validate()
    {
        if (\is_array($this->urls)) {
            Model::validateArray($this->urls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleInfo) {
            $res['roleInfo'] = $this->roleInfo;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }

        if (null !== $this->urls) {
            if (\is_array($this->urls)) {
                $res['urls'] = [];
                $n1 = 0;
                foreach ($this->urls as $item1) {
                    $res['urls'][$n1] = $item1;
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
        if (isset($map['roleInfo'])) {
            $model->roleInfo = $map['roleInfo'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        if (isset($map['urls'])) {
            if (!empty($map['urls'])) {
                $model->urls = [];
                $n1 = 0;
                foreach ($map['urls'] as $item1) {
                    $model->urls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
