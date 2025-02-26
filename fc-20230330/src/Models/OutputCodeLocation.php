<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class OutputCodeLocation extends Model
{
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $repositoryType;
    protected $_name = [
        'location'       => 'location',
        'repositoryType' => 'repositoryType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->repositoryType) {
            $res['repositoryType'] = $this->repositoryType;
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
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['repositoryType'])) {
            $model->repositoryType = $map['repositoryType'];
        }

        return $model;
    }
}
