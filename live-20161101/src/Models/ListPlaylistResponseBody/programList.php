<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistResponseBody;

use AlibabaCloud\Tea\Model;

class programList extends Model
{
    /**
     * @description The ID of the production studio to which the episode list belongs. You can use the ID as a request parameter in the API operation that is used to add a layout to the virtual studio, delete a layout in the virtual studio, modify a layout of the virtual studio, or query layouts of the virtual studio.
     *
     * @example casdfasdfasfdasdflkasjdflaj****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the episode list.
     *
     * @example c09f3d63-eacf-4fbf-bd48-a07a6ba7****
     *
     * @var string
     */
    public $programId;

    /**
     * @description The name of the episode list.
     *
     * @example playlist1
     *
     * @var string
     */
    public $programName;

    /**
     * @description The number of playbacks after the first playback is complete. Valid values:
     *
     *   **0** (default): specifies that the episode list is played only once.
     *   **-1**: specifies that the episode list is played in loop mode.
     *   Positive integer: specifies the number of times the episode list repeats after the first playback is complete.
     *
     * @example 1
     *
     * @var int
     */
    public $repeatNumber;

    /**
     * @description The status of the episode list. Valid values:
     *
     *   **0**: stopped
     *   **1**: running
     *
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return programList
     */
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
