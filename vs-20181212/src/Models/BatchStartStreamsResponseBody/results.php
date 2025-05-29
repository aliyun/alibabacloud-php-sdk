<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartStreamsResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'error' => 'Error',
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
