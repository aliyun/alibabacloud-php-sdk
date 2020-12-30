<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class SearchProjectsByRegionRequest extends Model
{
    /**
     * @var string
     */
    public $corpIdentifier;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $toPage;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'corpIdentifier' => 'CorpIdentifier',
        'region'         => 'Region',
        'status'         => 'Status',
        'toPage'         => 'ToPage',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->toPage) {
            $res['ToPage'] = $this->toPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchProjectsByRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ToPage'])) {
            $model->toPage = $map['ToPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
