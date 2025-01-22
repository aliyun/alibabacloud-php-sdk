<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListChannelAlertsResponseBody;

use AlibabaCloud\Dara\Model;

class programAlerts extends Model
{
    /**
     * @var string
     */
    public $arn;
    /**
     * @var string
     */
    public $category;
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $programName;
    protected $_name = [
        'arn'         => 'Arn',
        'category'    => 'Category',
        'count'       => 'Count',
        'gmtModified' => 'GmtModified',
        'programName' => 'ProgramName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
