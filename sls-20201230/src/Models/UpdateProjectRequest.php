<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class UpdateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $recycleBinEnabled;
    protected $_name = [
        'description' => 'description',
        'recycleBinEnabled' => 'recycleBinEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->recycleBinEnabled) {
            $res['recycleBinEnabled'] = $this->recycleBinEnabled;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['recycleBinEnabled'])) {
            $model->recycleBinEnabled = $map['recycleBinEnabled'];
        }

        return $model;
    }
}
