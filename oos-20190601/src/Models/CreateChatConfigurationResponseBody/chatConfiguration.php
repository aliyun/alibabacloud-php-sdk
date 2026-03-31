<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\CreateChatConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class chatConfiguration extends Model
{
    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'createdDate' => 'CreatedDate',
        'name' => 'Name',
        'updatedDate' => 'UpdatedDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
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
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }

        return $model;
    }
}
