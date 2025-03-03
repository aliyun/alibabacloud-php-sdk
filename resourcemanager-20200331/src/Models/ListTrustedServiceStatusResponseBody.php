<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponseBody\enabledServicePrincipals;

class ListTrustedServiceStatusResponseBody extends Model
{
    /**
     * @var enabledServicePrincipals
     */
    public $enabledServicePrincipals;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->enabledServicePrincipals) {
            $this->enabledServicePrincipals->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabledServicePrincipals) {
            $res['EnabledServicePrincipals'] = null !== $this->enabledServicePrincipals ? $this->enabledServicePrincipals->toArray($noStream) : $this->enabledServicePrincipals;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
