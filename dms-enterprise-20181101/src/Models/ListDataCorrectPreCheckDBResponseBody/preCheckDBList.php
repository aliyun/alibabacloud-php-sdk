<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBResponseBody;

use AlibabaCloud\Dara\Model;

class preCheckDBList extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var int
     */
    public $sqlNum;
    protected $_name = [
        'dbId' => 'DbId',
        'searchName' => 'SearchName',
        'sqlNum' => 'SqlNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        if (null !== $this->sqlNum) {
            $res['SqlNum'] = $this->sqlNum;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        if (isset($map['SqlNum'])) {
            $model->sqlNum = $map['SqlNum'];
        }

        return $model;
    }
}
