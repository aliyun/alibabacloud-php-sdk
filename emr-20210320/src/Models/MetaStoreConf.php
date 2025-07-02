<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class MetaStoreConf extends Model
{
    /**
     * @var string
     */
    public $dbPassword;

    /**
     * @var string
     */
    public $dbUrl;

    /**
     * @var string
     */
    public $dbUserName;
    protected $_name = [
        'dbPassword' => 'DbPassword',
        'dbUrl' => 'DbUrl',
        'dbUserName' => 'DbUserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbPassword) {
            $res['DbPassword'] = $this->dbPassword;
        }

        if (null !== $this->dbUrl) {
            $res['DbUrl'] = $this->dbUrl;
        }

        if (null !== $this->dbUserName) {
            $res['DbUserName'] = $this->dbUserName;
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
        if (isset($map['DbPassword'])) {
            $model->dbPassword = $map['DbPassword'];
        }

        if (isset($map['DbUrl'])) {
            $model->dbUrl = $map['DbUrl'];
        }

        if (isset($map['DbUserName'])) {
            $model->dbUserName = $map['DbUserName'];
        }

        return $model;
    }
}
