<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\schemeList;

use AlibabaCloud\Dara\Model;

class schemeList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $schemeId;
    protected $_name = [
        'name' => 'Name',
        'schemeId' => 'SchemeId',
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

        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
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

        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }

        return $model;
    }
}
