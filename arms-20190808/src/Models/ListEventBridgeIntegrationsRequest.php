<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListEventBridgeIntegrationsRequest extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'name' => 'Name',
        'page' => 'Page',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
