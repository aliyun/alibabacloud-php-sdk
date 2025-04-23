<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListAdvanceConfigDirRequest extends Model
{
    /**
     * @var string
     */
    public $dirName;
    protected $_name = [
        'dirName' => 'dirName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dirName) {
            $res['dirName'] = $this->dirName;
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
        if (isset($map['dirName'])) {
            $model->dirName = $map['dirName'];
        }

        return $model;
    }
}
