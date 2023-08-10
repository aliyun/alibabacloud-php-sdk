<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobRequest;

use AlibabaCloud\Tea\Model;

class partitionKey extends Model
{
    /**
     * @description Specifies whether the incremental data table contains partitions defined by the modifytime_day field. Valid values: **true** and **false**.
     *
     * >  This parameter is available only if the **DestinationEndpoint.InstanceType** parameter is set to **MaxCompute**.
     * @example true
     *
     * @var bool
     */
    public $modifyTimeDay;

    /**
     * @description Specifies whether the incremental data table contains partitions defined by the modifytime_hour field. Valid values: **true** and **false**.
     *
     * >  This parameter is available only if the **DestinationEndpoint.InstanceType** parameter is set to **MaxCompute**.
     * @example true
     *
     * @var bool
     */
    public $modifyTimeHour;

    /**
     * @description Specifies whether the incremental data table contains partitions defined by the modifytime_minute field. Valid values: **true** and **false**.
     *
     * >  This parameter is available only if the **DestinationEndpoint.InstanceType** parameter is set to **MaxCompute**.
     * @example true
     *
     * @var bool
     */
    public $modifyTimeMinute;

    /**
     * @description Specifies whether the incremental data table contains partitions defined by the modifytime_month field. Valid values: **true** and **false**.
     *
     * >  This parameter is available only if the **DestinationEndpoint.InstanceType** parameter is set to **MaxCompute**.
     * @example true
     *
     * @var bool
     */
    public $modifyTimeMonth;

    /**
     * @description Specifies whether the incremental data table contains partitions defined by the modifytime_year field. Valid values: **true** and **false**.
     *
     * >  This parameter is available only if the **DestinationEndpoint.InstanceType** parameter is set to **MaxCompute**.
     * @example true
     *
     * @var bool
     */
    public $modifyTimeYear;
    protected $_name = [
        'modifyTimeDay'    => 'ModifyTime_Day',
        'modifyTimeHour'   => 'ModifyTime_Hour',
        'modifyTimeMinute' => 'ModifyTime_Minute',
        'modifyTimeMonth'  => 'ModifyTime_Month',
        'modifyTimeYear'   => 'ModifyTime_Year',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyTimeDay) {
            $res['ModifyTime_Day'] = $this->modifyTimeDay;
        }
        if (null !== $this->modifyTimeHour) {
            $res['ModifyTime_Hour'] = $this->modifyTimeHour;
        }
        if (null !== $this->modifyTimeMinute) {
            $res['ModifyTime_Minute'] = $this->modifyTimeMinute;
        }
        if (null !== $this->modifyTimeMonth) {
            $res['ModifyTime_Month'] = $this->modifyTimeMonth;
        }
        if (null !== $this->modifyTimeYear) {
            $res['ModifyTime_Year'] = $this->modifyTimeYear;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return partitionKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyTime_Day'])) {
            $model->modifyTimeDay = $map['ModifyTime_Day'];
        }
        if (isset($map['ModifyTime_Hour'])) {
            $model->modifyTimeHour = $map['ModifyTime_Hour'];
        }
        if (isset($map['ModifyTime_Minute'])) {
            $model->modifyTimeMinute = $map['ModifyTime_Minute'];
        }
        if (isset($map['ModifyTime_Month'])) {
            $model->modifyTimeMonth = $map['ModifyTime_Month'];
        }
        if (isset($map['ModifyTime_Year'])) {
            $model->modifyTimeYear = $map['ModifyTime_Year'];
        }

        return $model;
    }
}
