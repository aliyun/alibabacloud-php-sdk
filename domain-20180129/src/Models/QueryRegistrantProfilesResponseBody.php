<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfilesResponseBody\registrantProfiles;
use AlibabaCloud\Tea\Model;

class QueryRegistrantProfilesResponseBody extends Model
{
    /**
     * @var bool
     */
    public $prePage;

    /**
     * @var int
     */
    public $currentPageNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalPageNum;

    /**
     * @var registrantProfiles
     */
    public $registrantProfiles;

    /**
     * @var int
     */
    public $totalItemNum;

    /**
     * @var bool
     */
    public $nextPage;
    protected $_name = [
        'prePage'            => 'PrePage',
        'currentPageNum'     => 'CurrentPageNum',
        'requestId'          => 'RequestId',
        'pageSize'           => 'PageSize',
        'totalPageNum'       => 'TotalPageNum',
        'registrantProfiles' => 'RegistrantProfiles',
        'totalItemNum'       => 'TotalItemNum',
        'nextPage'           => 'NextPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
        }
        if (null !== $this->registrantProfiles) {
            $res['RegistrantProfiles'] = null !== $this->registrantProfiles ? $this->registrantProfiles->toMap() : null;
        }
        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }
        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRegistrantProfilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }
        if (isset($map['RegistrantProfiles'])) {
            $model->registrantProfiles = registrantProfiles::fromMap($map['RegistrantProfiles']);
        }
        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }
        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }

        return $model;
    }
}
