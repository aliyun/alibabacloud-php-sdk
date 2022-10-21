<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig\assignConfigContests\assignConfigContest;

use AlibabaCloud\Tea\Model;

class listObject extends Model
{
    /**
     * @var mixed[]
     */
    public $listObject;
    protected $_name = [
        'listObject' => 'ListObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listObject) {
            $res['ListObject'] = $this->listObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListObject'])) {
            if (!empty($map['ListObject'])) {
                $model->listObject = $map['ListObject'];
            }
        }

        return $model;
    }
}
