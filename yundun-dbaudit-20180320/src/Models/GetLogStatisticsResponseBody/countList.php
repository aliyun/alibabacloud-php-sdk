<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class countList extends Model
{
    /**
     * @var string
     */
    public $sqlKeyword;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $clientProgram;

    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var string
     */
    public $dbServer;

    /**
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'sqlKeyword'    => 'SqlKeyword',
        'dbId'          => 'DbId',
        'dbName'        => 'DbName',
        'clientProgram' => 'ClientProgram',
        'dbUser'        => 'DbUser',
        'clientIp'      => 'ClientIp',
        'sqlCount'      => 'SqlCount',
        'riskCount'     => 'RiskCount',
        'dbServer'      => 'DbServer',
        'sqlType'       => 'SqlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sqlKeyword) {
            $res['SqlKeyword'] = $this->sqlKeyword;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->clientProgram) {
            $res['ClientProgram'] = $this->clientProgram;
        }
        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->dbServer) {
            $res['DbServer'] = $this->dbServer;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return countList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SqlKeyword'])) {
            $model->sqlKeyword = $map['SqlKeyword'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['ClientProgram'])) {
            $model->clientProgram = $map['ClientProgram'];
        }
        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['DbServer'])) {
            $model->dbServer = $map['DbServer'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        return $model;
    }
}
