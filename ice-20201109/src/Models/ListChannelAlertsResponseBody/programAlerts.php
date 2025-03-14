<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListChannelAlertsResponseBody;

use AlibabaCloud\Tea\Model;

class programAlerts extends Model
{
    /**
     * @description The ARN of the program.
     *
     * @example acs:ims:mediaweaver:<regionId>:<userId>:program/myChannel/MyProgram
     *
     * @var string
     */
    public $arn;

    /**
     * @description The alert type.
     *
     * @var string
     */
    public $category;

    /**
     * @description The number of alerts.
     *
     * @example 4
     *
     * @var int
     */
    public $count;

    /**
     * @description The time when the alert was last modified in UTC.
     *
     * @example 2024-07-16T10:03Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The name of the program.
     *
     * @example program_name
     *
     * @var string
     */
    public $programName;
    protected $_name = [
        'arn' => 'Arn',
        'category' => 'Category',
        'count' => 'Count',
        'gmtModified' => 'GmtModified',
        'programName' => 'ProgramName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return programAlerts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }

        return $model;
    }
}
