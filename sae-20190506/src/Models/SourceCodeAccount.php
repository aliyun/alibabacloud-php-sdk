<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\SourceCodeAccount\organizations;

class SourceCodeAccount extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var organizations[]
     */
    public $organizations;
    protected $_name = [
        'avatarUrl' => 'AvatarUrl',
        'id' => 'Id',
        'name' => 'Name',
        'organizations' => 'Organizations',
    ];

    public function validate()
    {
        if (\is_array($this->organizations)) {
            Model::validateArray($this->organizations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->organizations) {
            if (\is_array($this->organizations)) {
                $res['Organizations'] = [];
                $n1 = 0;
                foreach ($this->organizations as $item1) {
                    $res['Organizations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Organizations'])) {
            if (!empty($map['Organizations'])) {
                $model->organizations = [];
                $n1 = 0;
                foreach ($map['Organizations'] as $item1) {
                    $model->organizations[$n1] = organizations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
