<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListTemplatesForSqlRuleResponseBody;

use AlibabaCloud\Tea\Model;

class serverData extends Model
{
    /**
     * @var string
     */
    public $countTimely;

    /**
     * @var int
     */
    public $blackOrWhite;

    /**
     * @var string
     */
    public $sqlText;

    /**
     * @var string
     */
    public $sqltype1;

    /**
     * @var string
     */
    public $sqlId;
    protected $_name = [
        'countTimely'  => 'CountTimely',
        'blackOrWhite' => 'BlackOrWhite',
        'sqlText'      => 'SqlText',
        'sqltype1'     => 'Sqltype1',
        'sqlId'        => 'SqlId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countTimely) {
            $res['CountTimely'] = $this->countTimely;
        }
        if (null !== $this->blackOrWhite) {
            $res['BlackOrWhite'] = $this->blackOrWhite;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }
        if (null !== $this->sqltype1) {
            $res['Sqltype1'] = $this->sqltype1;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CountTimely'])) {
            $model->countTimely = $map['CountTimely'];
        }
        if (isset($map['BlackOrWhite'])) {
            $model->blackOrWhite = $map['BlackOrWhite'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }
        if (isset($map['Sqltype1'])) {
            $model->sqltype1 = $map['Sqltype1'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        return $model;
    }
}
