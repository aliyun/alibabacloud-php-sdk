<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models;

use AlibabaCloud\Tea\Model;

class GetQccSearchCertificationRequest extends Model
{
    /**
     * @var string
     */
    public $certCategory;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'certCategory' => 'CertCategory',
        'entName'      => 'EntName',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certCategory) {
            $res['CertCategory'] = $this->certCategory;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQccSearchCertificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertCategory'])) {
            $model->certCategory = $map['CertCategory'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
