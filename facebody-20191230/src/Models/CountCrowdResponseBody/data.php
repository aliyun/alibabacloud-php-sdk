<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\CountCrowdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $peopleNumber;

    /**
     * @var string
     */
    public $hotMap;
    protected $_name = [
        'peopleNumber' => 'PeopleNumber',
        'hotMap'       => 'HotMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peopleNumber) {
            $res['PeopleNumber'] = $this->peopleNumber;
        }
        if (null !== $this->hotMap) {
            $res['HotMap'] = $this->hotMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeopleNumber'])) {
            $model->peopleNumber = $map['PeopleNumber'];
        }
        if (isset($map['HotMap'])) {
            $model->hotMap = $map['HotMap'];
        }

        return $model;
    }
}
