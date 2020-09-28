<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class ListPidProjectsRequest extends Model
{
    /**
     * @var string
     */
    public $pidProjectName;

    /**
     * @var string
     */
    public $pidOrganisationId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'pidProjectName'    => 'PidProjectName',
        'pidOrganisationId' => 'PidOrganisationId',
        'pageSize'          => 'PageSize',
        'currentPage'       => 'CurrentPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidProjectName) {
            $res['PidProjectName'] = $this->pidProjectName;
        }
        if (null !== $this->pidOrganisationId) {
            $res['PidOrganisationId'] = $this->pidOrganisationId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPidProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidProjectName'])) {
            $model->pidProjectName = $map['PidProjectName'];
        }
        if (isset($map['PidOrganisationId'])) {
            $model->pidOrganisationId = $map['PidOrganisationId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}
