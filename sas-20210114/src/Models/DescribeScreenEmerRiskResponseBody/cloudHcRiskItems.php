<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenEmerRiskResponseBody;

use AlibabaCloud\Dara\Model;

class cloudHcRiskItems extends Model
{
    /**
     * @var int
     */
    public $affectCount;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $vulName;
    protected $_name = [
        'affectCount' => 'AffectCount',
        'level' => 'Level',
        'vulName' => 'VulName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectCount) {
            $res['AffectCount'] = $this->affectCount;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->vulName) {
            $res['VulName'] = $this->vulName;
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
        if (isset($map['AffectCount'])) {
            $model->affectCount = $map['AffectCount'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['VulName'])) {
            $model->vulName = $map['VulName'];
        }

        return $model;
    }
}
