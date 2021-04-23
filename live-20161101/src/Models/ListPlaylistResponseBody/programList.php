<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistResponseBody;

use AlibabaCloud\Tea\Model;

class programList extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $repeatNumber;

    /**
     * @var string
     */
    public $programName;

    /**
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'status'       => 'Status',
        'repeatNumber' => 'RepeatNumber',
        'programName'  => 'ProgramName',
        'programId'    => 'ProgramId',
        'casterId'     => 'CasterId',
        'domainName'   => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->repeatNumber) {
            $res['RepeatNumber'] = $this->repeatNumber;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return programList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RepeatNumber'])) {
            $model->repeatNumber = $map['RepeatNumber'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
