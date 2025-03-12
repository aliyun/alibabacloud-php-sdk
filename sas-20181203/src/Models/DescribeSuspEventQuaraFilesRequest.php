<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventQuaraFilesRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The ID of the request source. Set the value to **sas**.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The ID of the asset group.
     *
     * @example 10541428
     *
     * @deprecated
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the server group to which the server belongs. The quarantined file is located on the server.
     *
     * @example 11472451
     *
     * @var int
     */
    public $groupingId;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The unique ID of the quarantined file.
     *
     * @example a31337789f64d39b2219733ec99f9af7
     *
     * @var string
     */
    public $quaraTag;

    /**
     * @description The source IP address of the request.
     *
     * @example 59.82.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The status of the quarantined file that you want to query. Valid values:
     *
     *   **quaraFailed**: The file fails to be quarantined.
     *   **quaraDone**: The file is quarantined.
     *   **quaraing**: The file is being quarantined.
     *   **rollbackFailed**: The system fails to cancel quarantining the file.
     *   **rollbackDone**: The system cancelled quarantining the file.
     *   **rollbacking**: The system is cancelling quarantining the file.
     *
     * @example quaraDone
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'from'        => 'From',
        'groupId'     => 'GroupId',
        'groupingId'  => 'GroupingId',
        'pageSize'    => 'PageSize',
        'quaraTag'    => 'QuaraTag',
        'sourceIp'    => 'SourceIp',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupingId) {
            $res['GroupingId'] = $this->groupingId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->quaraTag) {
            $res['QuaraTag'] = $this->quaraTag;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventQuaraFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupingId'])) {
            $model->groupingId = $map['GroupingId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QuaraTag'])) {
            $model->quaraTag = $map['QuaraTag'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
