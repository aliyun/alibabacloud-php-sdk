<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponseBody\enabledServicePrincipals;
use AlibabaCloud\Tea\Model;

class ListTrustedServiceStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;

    /**
     * @var enabledServicePrincipals
     */
    public $enabledServicePrincipals;
    protected $_name = [
        'totalCount'               => 'TotalCount',
        'requestId'                => 'RequestId',
        'pageSize'                 => 'PageSize',
        'pageNumber'               => 'PageNumber',
        'enabledServicePrincipals' => 'EnabledServicePrincipals',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->enabledServicePrincipals) {
            $res['EnabledServicePrincipals'] = null !== $this->enabledServicePrincipals ? $this->enabledServicePrincipals->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrustedServiceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['EnabledServicePrincipals'])) {
            $model->enabledServicePrincipals = enabledServicePrincipals::fromMap($map['EnabledServicePrincipals']);
        }

        return $model;
    }
}
