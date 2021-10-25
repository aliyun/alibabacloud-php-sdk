<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo\logs\checkList;

use AlibabaCloud\Tea\Model;

class checkList extends Model
{
    /**
     * @var string
     */
    public $checkInfo;

    /**
     * @var string
     */
    public $checkDescription;

    /**
     * @var string
     */
    public $checkSolution;

    /**
     * @var string
     */
    public $checkName;
    protected $_name = [
        'checkInfo'        => 'CheckInfo',
        'checkDescription' => 'CheckDescription',
        'checkSolution'    => 'CheckSolution',
        'checkName'        => 'CheckName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkInfo) {
            $res['CheckInfo'] = $this->checkInfo;
        }
        if (null !== $this->checkDescription) {
            $res['CheckDescription'] = $this->checkDescription;
        }
        if (null !== $this->checkSolution) {
            $res['CheckSolution'] = $this->checkSolution;
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckInfo'])) {
            $model->checkInfo = $map['CheckInfo'];
        }
        if (isset($map['CheckDescription'])) {
            $model->checkDescription = $map['CheckDescription'];
        }
        if (isset($map['CheckSolution'])) {
            $model->checkSolution = $map['CheckSolution'];
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        return $model;
    }
}
