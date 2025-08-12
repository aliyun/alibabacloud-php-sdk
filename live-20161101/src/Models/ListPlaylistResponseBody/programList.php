<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistResponseBody;

use AlibabaCloud\Dara\Model;

class programList extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $programName;

    /**
     * @var int
     */
    public $repeatNumber;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'casterId' => 'CasterId',
        'domainName' => 'DomainName',
        'programId' => 'ProgramId',
        'programName' => 'ProgramName',
        'repeatNumber' => 'RepeatNumber',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }

        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }

        if (null !== $this->repeatNumber) {
            $res['RepeatNumber'] = $this->repeatNumber;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }

        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }

        if (isset($map['RepeatNumber'])) {
            $model->repeatNumber = $map['RepeatNumber'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
