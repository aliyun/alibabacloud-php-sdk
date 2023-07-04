<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListAttributesResponseBody\aclEntries;
use AlibabaCloud\Tea\Model;

class DescribeIPv6TranslatorAclListAttributesResponseBody extends Model
{
    /**
     * @description The ACLs.
     *
     * @var aclEntries
     */
    public $aclEntries;

    /**
     * @description The ACL ID.
     *
     * @example ipv6transacl-bp1de2****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The name of the ACL.
     *
     * @example acl1
     *
     * @var string
     */
    public $aclName;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'aclEntries' => 'AclEntries',
        'aclId'      => 'AclId',
        'aclName'    => 'AclName',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntries) {
            $res['AclEntries'] = null !== $this->aclEntries ? $this->aclEntries->toMap() : null;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
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
     * @return DescribeIPv6TranslatorAclListAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntries'])) {
            $model->aclEntries = aclEntries::fromMap($map['AclEntries']);
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
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
