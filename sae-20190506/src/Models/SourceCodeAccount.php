<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\SourceCodeAccount\organizations;
use AlibabaCloud\Tea\Model;

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
        'avatarUrl'     => 'AvatarUrl',
        'id'            => 'Id',
        'name'          => 'Name',
        'organizations' => 'Organizations',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Organizations'] = [];
            if (null !== $this->organizations && \is_array($this->organizations)) {
                $n = 0;
                foreach ($this->organizations as $item) {
                    $res['Organizations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SourceCodeAccount
     */
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
                $n                    = 0;
                foreach ($map['Organizations'] as $item) {
                    $model->organizations[$n++] = null !== $item ? organizations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
