<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\Tea\Model;

class relationTypeList extends Model
{
    /**
     * @var string
     */
    public $showType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $directed;
    protected $_name = [
        'showType' => 'ShowType',
        'name'     => 'Name',
        'id'       => 'Id',
        'directed' => 'Directed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->directed) {
            $res['Directed'] = $this->directed;
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
        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Directed'])) {
            $model->directed = $map['Directed'];
        }

        return $model;
    }
}
