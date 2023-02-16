<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTrustedServiceStatusResponseBody\enabledServicePrincipals;
use AlibabaCloud\Tea\Model;

class ListTrustedServiceStatusResponseBody extends Model
{
    /**
     * @var enabledServicePrincipals
     */
    public $enabledServicePrincipals;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example CD76D376-2517-4924-92C5-DBC52262F93A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'enabledServicePrincipals' => 'EnabledServicePrincipals',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'requestId'                => 'RequestId',
        'totalCount'               => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabledServicePrincipals) {
            $res['EnabledServicePrincipals'] = null !== $this->enabledServicePrincipals ? $this->enabledServicePrincipals->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['EnabledServicePrincipals'])) {
            $model->enabledServicePrincipals = enabledServicePrincipals::fromMap($map['EnabledServicePrincipals']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
