<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateEvaluatePreCheckTaskRequest;

use AlibabaCloud\Tea\Model;

class dbInfo extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbPassword;

    /**
     * @var string
     */
    public $dbPort;

    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var string
     */
    public $instId;
    protected $_name = [
        'dbName'     => 'DbName',
        'dbPassword' => 'DbPassword',
        'dbPort'     => 'DbPort',
        'dbUser'     => 'DbUser',
        'instId'     => 'InstId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbPassword) {
            $res['DbPassword'] = $this->dbPassword;
        }
        if (null !== $this->dbPort) {
            $res['DbPort'] = $this->dbPort;
        }
        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }
        if (null !== $this->instId) {
            $res['InstId'] = $this->instId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbPassword'])) {
            $model->dbPassword = $map['DbPassword'];
        }
        if (isset($map['DbPort'])) {
            $model->dbPort = $map['DbPort'];
        }
        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }
        if (isset($map['InstId'])) {
            $model->instId = $map['InstId'];
        }

        return $model;
    }
}
