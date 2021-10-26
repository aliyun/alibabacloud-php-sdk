<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo\logs\checkList;

use AlibabaCloud\Tea\Model;

class checkList extends Model
{
    /**
     * @var string
     */
    public $checkDescription;

    /**
     * @var string
     */
    public $checkInfo;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @var string
     */
    public $checkSolution;
    protected $_name = [
        'checkDescription' => 'CheckDescription',
        'checkInfo'        => 'CheckInfo',
        'checkName'        => 'CheckName',
        'checkSolution'    => 'CheckSolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkDescription) {
            $res['CheckDescription'] = $this->checkDescription;
        }
        if (null !== $this->checkInfo) {
            $res['CheckInfo'] = $this->checkInfo;
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->checkSolution) {
            $res['CheckSolution'] = $this->checkSolution;
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
        if (isset($map['CheckDescription'])) {
            $model->checkDescription = $map['CheckDescription'];
        }
        if (isset($map['CheckInfo'])) {
            $model->checkInfo = $map['CheckInfo'];
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['CheckSolution'])) {
            $model->checkSolution = $map['CheckSolution'];
        }

        return $model;
    }
}
