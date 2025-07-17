<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\commonParam;

use AlibabaCloud\Tea\Model;

class alertList extends Model
{
    /**
     * @description The low-risk alert.
     *
     * @example 1
     *
     * @var string
     */
    public $generalAlert;

    /**
     * @description Indicates whether the condition is essential.
     *
     * @example 0
     *
     * @var string
     */
    public $isCritical;

    /**
     * @description The alert name.
     *
     * @example alert-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The Critical-level alert.
     *
     * @example 1
     *
     * @var string
     */
    public $seriousAlert;

    /**
     * @description Greater than or less than.
     *
     * @example 1
     *
     * @var string
     */
    public $symbols;
    protected $_name = [
        'generalAlert' => 'GeneralAlert',
        'isCritical' => 'IsCritical',
        'name' => 'Name',
        'seriousAlert' => 'SeriousAlert',
        'symbols' => 'Symbols',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->generalAlert) {
            $res['GeneralAlert'] = $this->generalAlert;
        }
        if (null !== $this->isCritical) {
            $res['IsCritical'] = $this->isCritical;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->seriousAlert) {
            $res['SeriousAlert'] = $this->seriousAlert;
        }
        if (null !== $this->symbols) {
            $res['Symbols'] = $this->symbols;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GeneralAlert'])) {
            $model->generalAlert = $map['GeneralAlert'];
        }
        if (isset($map['IsCritical'])) {
            $model->isCritical = $map['IsCritical'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SeriousAlert'])) {
            $model->seriousAlert = $map['SeriousAlert'];
        }
        if (isset($map['Symbols'])) {
            $model->symbols = $map['Symbols'];
        }

        return $model;
    }
}
