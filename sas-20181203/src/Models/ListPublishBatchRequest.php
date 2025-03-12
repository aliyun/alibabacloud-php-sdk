<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListPublishBatchRequest extends Model
{
    /**
     * @description The name of the release batch.
     *
     * @example test
     *
     * @var string
     */
    public $batchName;

    /**
     * @description The page number.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries per page.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The destination version of the Security Center agent.
     *
     * This parameter is required.
     * @example 0.0.9
     *
     * @var string
     */
    public $upgradeVersion;
    protected $_name = [
        'batchName'      => 'BatchName',
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'upgradeVersion' => 'UpgradeVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchName) {
            $res['BatchName'] = $this->batchName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->upgradeVersion) {
            $res['UpgradeVersion'] = $this->upgradeVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublishBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchName'])) {
            $model->batchName = $map['BatchName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UpgradeVersion'])) {
            $model->upgradeVersion = $map['UpgradeVersion'];
        }

        return $model;
    }
}
