<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody\suspEvents;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The display name of the alert event.
     *
     * @example Login with unusual location
     *
     * @var string
     */
    public $nameDisplay;

    /**
     * @description The type of the alert event.
     *
     * @example text
     *
     * @var string
     */
    public $type;

    /**
     * @description The path of the alert event.
     *
     * @example /etc/crontab
     *
     * @var string
     */
    public $value;

    /**
     * @description The display name of the path of the alert event.
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
     * @return details
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
