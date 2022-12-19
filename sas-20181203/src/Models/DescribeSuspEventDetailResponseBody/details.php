<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventDetailResponseBody;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The display name of the alert event.
     *
     * @example Trojan Path
     *
     * @var string
     */
    public $nameDisplay;

    /**
     * @description The format in which the details about the exception are displayed.
     *
     * Valid values:
     *
     *   **text**
     *   **html**
     *
     * @example html
     *
     * @var string
     */
    public $type;

    /**
     * @description The attribute information about the exception. For example, if the exception is associated with an alert that is triggered by an unusual logon, the information can include the time when the logon is initiated and the location from which the logon is initiated. If the exception is associated with an alert that is triggered by a webshell file, the information can include the path of the trojan file and the type of the trojan.
     *
     * @example getopt
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'nameDisplay' => 'NameDisplay',
        'type'        => 'Type',
        'value'       => 'Value',
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

        return $model;
    }
}
