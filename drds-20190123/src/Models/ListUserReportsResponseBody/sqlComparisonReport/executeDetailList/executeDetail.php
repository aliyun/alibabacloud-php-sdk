<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\ListUserReportsResponseBody\sqlComparisonReport\executeDetailList;

use AlibabaCloud\Tea\Model;

class executeDetail extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $execDetailMsg;

    /**
     * @var string
     */
    public $execute;

    /**
     * @var string
     */
    public $sqlContent;
    protected $_name = [
        'dbName'        => 'DbName',
        'execDetailMsg' => 'ExecDetailMsg',
        'execute'       => 'Execute',
        'sqlContent'    => 'SqlContent',
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
        if (null !== $this->execDetailMsg) {
            $res['ExecDetailMsg'] = $this->execDetailMsg;
        }
        if (null !== $this->execute) {
            $res['Execute'] = $this->execute;
        }
        if (null !== $this->sqlContent) {
            $res['SqlContent'] = $this->sqlContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executeDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['ExecDetailMsg'])) {
            $model->execDetailMsg = $map['ExecDetailMsg'];
        }
        if (isset($map['Execute'])) {
            $model->execute = $map['Execute'];
        }
        if (isset($map['SqlContent'])) {
            $model->sqlContent = $map['SqlContent'];
        }

        return $model;
    }
}
