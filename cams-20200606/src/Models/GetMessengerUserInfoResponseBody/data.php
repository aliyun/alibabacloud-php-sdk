<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetMessengerUserInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $picture;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'picture' => 'Picture',
    ];

    public function validate()
    {
        if (\is_array($this->picture)) {
            Model::validateArray($this->picture);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->picture) {
            if (\is_array($this->picture)) {
                $res['Picture'] = [];
                foreach ($this->picture as $key1 => $value1) {
                    $res['Picture'][$key1] = $value1;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Picture'])) {
            if (!empty($map['Picture'])) {
                $model->picture = [];
                foreach ($map['Picture'] as $key1 => $value1) {
                    $model->picture[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
