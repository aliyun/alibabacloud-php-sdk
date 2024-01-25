<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetScenarioListRequest extends Model
{
    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scenarioName;

    /**
     * @var string
     */
    public $sceneSelectLabel;
    protected $_name = [
        'operaUid'         => 'OperaUid',
        'pageNo'           => 'PageNo',
        'pageSize'         => 'PageSize',
        'scenarioName'     => 'ScenarioName',
        'sceneSelectLabel' => 'SceneSelectLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scenarioName) {
            $res['ScenarioName'] = $this->scenarioName;
        }
        if (null !== $this->sceneSelectLabel) {
            $res['SceneSelectLabel'] = $this->sceneSelectLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScenarioListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScenarioName'])) {
            $model->scenarioName = $map['ScenarioName'];
        }
        if (isset($map['SceneSelectLabel'])) {
            $model->sceneSelectLabel = $map['SceneSelectLabel'];
        }

        return $model;
    }
}
