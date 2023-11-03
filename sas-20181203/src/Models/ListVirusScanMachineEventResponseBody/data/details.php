<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanMachineEventResponseBody\data;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @example download_url
     *
     * @var string
     */
    public $infoType;

    /**
     * @example Trojan Path
     *
     * @var string
     */
    public $nameDisplay;

    /**
     * @example html
     *
     * @var string
     */
    public $type;

    /**
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
