<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateEssOptJobRequest;

use AlibabaCloud\Tea\Model;

class systemData extends Model
{
    /**
     * @var mixed[][]
     */
    public $historyData;

    /**
     * @example 1
     *
     * @var string
     */
    public $systemId;

    /**
     * @var mixed[]
     */
    public $systemParams;

    /**
     * @example ess
     *
     * @var string
     */
    public $systemType;
    protected $_name = [
        'historyData' => 'HistoryData',
        'systemId' => 'SystemId',
        'systemParams' => 'SystemParams',
        'systemType' => 'SystemType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->historyData) {
            $res['HistoryData'] = $this->historyData;
        }
        if (null !== $this->systemId) {
            $res['SystemId'] = $this->systemId;
        }
        if (null !== $this->systemParams) {
            $res['SystemParams'] = $this->systemParams;
        }
        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HistoryData'])) {
            if (!empty($map['HistoryData'])) {
                $model->historyData = $map['HistoryData'];
            }
        }
        if (isset($map['SystemId'])) {
            $model->systemId = $map['SystemId'];
        }
        if (isset($map['SystemParams'])) {
            $model->systemParams = $map['SystemParams'];
        }
        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }

        return $model;
    }
}
