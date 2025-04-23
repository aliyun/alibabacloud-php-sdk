<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class BatchSetDesktopManagerRequest extends Model
{
    /**
     * @var string
     */
    public $isDesktopManager;

    /**
     * @var string[]
     */
    public $users;
    protected $_name = [
        'isDesktopManager' => 'IsDesktopManager',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDesktopManager) {
            $res['IsDesktopManager'] = $this->isDesktopManager;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1++] = $item1;
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
        if (isset($map['IsDesktopManager'])) {
            $model->isDesktopManager = $map['IsDesktopManager'];
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
