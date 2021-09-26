<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTopStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class countList extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var string
     */
    public $clientProgram;
    protected $_name = [
        'clientIp'      => 'ClientIp',
        'dbUser'        => 'DbUser',
        'sqlCount'      => 'SqlCount',
        'clientProgram' => 'ClientProgram',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->clientProgram) {
            $res['ClientProgram'] = $this->clientProgram;
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
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['ClientProgram'])) {
            $model->clientProgram = $map['ClientProgram'];
        }

        return $model;
    }
}
