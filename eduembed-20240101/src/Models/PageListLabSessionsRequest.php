<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Tea\Model;

class PageListLabSessionsRequest extends Model
{
    /**
     * @var bool
     */
    public $finished;

    /**
     * @var int
     */
    public $labId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $ramAccountId;
    protected $_name = [
        'finished'     => 'Finished',
        'labId'        => 'LabId',
        'page'         => 'Page',
        'pageSize'     => 'PageSize',
        'ramAccountId' => 'RamAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }
        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ramAccountId) {
            $res['RamAccountId'] = $this->ramAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageListLabSessionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }
        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RamAccountId'])) {
            $model->ramAccountId = $map['RamAccountId'];
        }

        return $model;
    }
}
