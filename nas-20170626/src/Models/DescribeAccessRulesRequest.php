<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccessRulesRequest extends Model
{
    /**
     * @var string
     */
    public $accessGroupName;

    /**
     * @var string
     */
    public $accessRuleId;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var string
     */
    public $sourceCidrIpFilter;
    protected $_name = [
        'accessGroupName'    => 'AccessGroupName',
        'accessRuleId'       => 'AccessRuleId',
        'sourceCidrIp'       => 'SourceCidrIp',
        'pageSize'           => 'PageSize',
        'pageNumber'         => 'PageNumber',
        'fileSystemType'     => 'FileSystemType',
        'sourceCidrIpFilter' => 'SourceCidrIpFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->accessRuleId) {
            $res['AccessRuleId'] = $this->accessRuleId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->sourceCidrIpFilter) {
            $res['SourceCidrIpFilter'] = $this->sourceCidrIpFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccessRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['AccessRuleId'])) {
            $model->accessRuleId = $map['AccessRuleId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['SourceCidrIpFilter'])) {
            $model->sourceCidrIpFilter = $map['SourceCidrIpFilter'];
        }

        return $model;
    }
}
