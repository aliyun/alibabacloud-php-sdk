<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetAlarmDetailByIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class eventDetails extends Model
{
    /**
     * @description Alarm event display name.
     *
     * @example Login with unusual location
     *
     * @var string
     */
    public $nameDisplay;

    /**
     * @description Alarm event type.
     *
     * @example text
     *
     * @var string
     */
    public $type;

    /**
     * @description Path where the alarm event occurred.
     *
     * @example /etc/crontab
     *
     * @var string
     */
    public $value;

    /**
     * @description Path where the alarm event occurred.
     *
     * @example /etc/crontab
     *
     * @var string
     */
    public $valueDisplay;
    protected $_name = [
        'nameDisplay'  => 'NameDisplay',
        'type'         => 'Type',
        'value'        => 'Value',
        'valueDisplay' => 'ValueDisplay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameDisplay) {
            $res['NameDisplay'] = $this->nameDisplay;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueDisplay) {
            $res['ValueDisplay'] = $this->valueDisplay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameDisplay'])) {
            $model->nameDisplay = $map['NameDisplay'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueDisplay'])) {
            $model->valueDisplay = $map['ValueDisplay'];
        }

        return $model;
    }
}
