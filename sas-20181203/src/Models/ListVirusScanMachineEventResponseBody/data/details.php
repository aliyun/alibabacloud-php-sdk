<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanMachineEventResponseBody\data;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The display type of the value for ValueDisplay. Valid value:
     *
     *   **download_url**, which indicates a download URL.
     *
     * @example download_url
     *
     * @var string
     */
    public $infoType;

    /**
     * @description The display name of the alert event.
     *
     * @example Trojan Path
     *
     * @var string
     */
    public $nameDisplay;

    /**
     * @description The format in which the details of the exception are displayed.
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
     * @description The attribute information about the exception. The information includes the logon time or location of an alert triggered by an unusual logon, and the trojan file path or trojan type of an alert.
     *
     * @example getopt
     *
     * @var string
     */
    public $valueDisplay;
    protected $_name = [
        'infoType'     => 'InfoType',
        'nameDisplay'  => 'NameDisplay',
        'type'         => 'Type',
        'valueDisplay' => 'ValueDisplay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infoType) {
            $res['InfoType'] = $this->infoType;
        }
        if (null !== $this->nameDisplay) {
            $res['NameDisplay'] = $this->nameDisplay;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['InfoType'])) {
            $model->infoType = $map['InfoType'];
        }
        if (isset($map['NameDisplay'])) {
            $model->nameDisplay = $map['NameDisplay'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ValueDisplay'])) {
            $model->valueDisplay = $map['ValueDisplay'];
        }

        return $model;
    }
}
