<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody\csUsage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody\dbUsage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody\fcUsage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody\whUsage;
use AlibabaCloud\Tea\Model;

class QuerySpaceConsumptionResponseBody extends Model
{
    /**
     * @var csUsage
     */
    public $csUsage;

    /**
     * @var dbUsage
     */
    public $dbUsage;

    /**
     * @var fcUsage
     */
    public $fcUsage;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $specCode;

    /**
     * @var whUsage
     */
    public $whUsage;
    protected $_name = [
        'csUsage'   => 'CsUsage',
        'dbUsage'   => 'DbUsage',
        'fcUsage'   => 'FcUsage',
        'gmtCreate' => 'GmtCreate',
        'requestId' => 'RequestId',
        'spaceId'   => 'SpaceId',
        'specCode'  => 'SpecCode',
        'whUsage'   => 'WhUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csUsage) {
            $res['CsUsage'] = null !== $this->csUsage ? $this->csUsage->toMap() : null;
        }
        if (null !== $this->dbUsage) {
            $res['DbUsage'] = null !== $this->dbUsage ? $this->dbUsage->toMap() : null;
        }
        if (null !== $this->fcUsage) {
            $res['FcUsage'] = null !== $this->fcUsage ? $this->fcUsage->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->specCode) {
            $res['SpecCode'] = $this->specCode;
        }
        if (null !== $this->whUsage) {
            $res['WhUsage'] = null !== $this->whUsage ? $this->whUsage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpaceConsumptionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsUsage'])) {
            $model->csUsage = csUsage::fromMap($map['CsUsage']);
        }
        if (isset($map['DbUsage'])) {
            $model->dbUsage = dbUsage::fromMap($map['DbUsage']);
        }
        if (isset($map['FcUsage'])) {
            $model->fcUsage = fcUsage::fromMap($map['FcUsage']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SpecCode'])) {
            $model->specCode = $map['SpecCode'];
        }
        if (isset($map['WhUsage'])) {
            $model->whUsage = whUsage::fromMap($map['WhUsage']);
        }

        return $model;
    }
}
