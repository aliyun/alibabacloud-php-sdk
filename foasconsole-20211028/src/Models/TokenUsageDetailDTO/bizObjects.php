<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\TokenUsageDetailDTO;

use AlibabaCloud\Dara\Model;

class bizObjects extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'id' => 'Id',
        'kind' => 'Kind',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
