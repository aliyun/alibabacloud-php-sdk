<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\Tea\Model;

class relationTypeList extends Model
{
    /**
     * @var int
     */
    public $directed;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $showType;
    protected $_name = [
        'directed' => 'Directed',
        'id'       => 'Id',
        'name'     => 'Name',
        'showType' => 'ShowType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directed) {
            $res['Directed'] = $this->directed;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Directed'])) {
            $model->directed = $map['Directed'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }

        return $model;
    }
}
