<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class SQLDetails extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbName' => 'DbName',
        'SQLText' => 'SQLText',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
