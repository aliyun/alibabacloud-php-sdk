<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetIndexDialysisListRequest extends Model
{
    /**
     * @var string
     */
    public $businessGroupId;

    /**
     * @var string
     */
    public $cloudResourceId;

    /**
     * @var string
     */
    public $cloudTypeName;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $indexCode;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'businessGroupId' => 'BusinessGroupId',
        'cloudResourceId' => 'CloudResourceId',
        'cloudTypeName'   => 'CloudTypeName',
        'currentPage'     => 'CurrentPage',
        'indexCode'       => 'IndexCode',
        'operaUid'        => 'OperaUid',
        'pageSize'        => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }
        if (null !== $this->cloudResourceId) {
            $res['CloudResourceId'] = $this->cloudResourceId;
        }
        if (null !== $this->cloudTypeName) {
            $res['CloudTypeName'] = $this->cloudTypeName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->indexCode) {
            $res['IndexCode'] = $this->indexCode;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIndexDialysisListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['CloudResourceId'])) {
            $model->cloudResourceId = $map['CloudResourceId'];
        }
        if (isset($map['CloudTypeName'])) {
            $model->cloudTypeName = $map['CloudTypeName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IndexCode'])) {
            $model->indexCode = $map['IndexCode'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
