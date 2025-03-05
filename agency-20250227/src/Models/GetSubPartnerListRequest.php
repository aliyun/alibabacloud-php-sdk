<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models;

use AlibabaCloud\Dara\Model;

class GetSubPartnerListRequest extends Model
{
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $subPartnerCompanyName;
    /**
     * @var string
     */
    public $subPartnerPid;
    protected $_name = [
        'pageNo'                => 'PageNo',
        'pageSize'              => 'PageSize',
        'subPartnerCompanyName' => 'SubPartnerCompanyName',
        'subPartnerPid'         => 'SubPartnerPid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->subPartnerCompanyName) {
            $res['SubPartnerCompanyName'] = $this->subPartnerCompanyName;
        }

        if (null !== $this->subPartnerPid) {
            $res['SubPartnerPid'] = $this->subPartnerPid;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SubPartnerCompanyName'])) {
            $model->subPartnerCompanyName = $map['SubPartnerCompanyName'];
        }

        if (isset($map['SubPartnerPid'])) {
            $model->subPartnerPid = $map['SubPartnerPid'];
        }

        return $model;
    }
}
