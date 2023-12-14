<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertTypeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the risk.
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The internal code of the risk type.
     *
     * @example siem_rule_type_process_abnormal_command
     *
     * @var string
     */
    public $alertTypeMds;
    protected $_name = [
        'alertType'    => 'AlertType',
        'alertTypeMds' => 'AlertTypeMds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->alertTypeMds) {
            $res['AlertTypeMds'] = $this->alertTypeMds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['AlertTypeMds'])) {
            $model->alertTypeMds = $map['AlertTypeMds'];
        }

        return $model;
    }
}
