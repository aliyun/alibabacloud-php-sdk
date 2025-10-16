<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUnprotectedVulnTrendResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $protectedVulnCnt;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $unprotectedVulnCnt;
    protected $_name = [
        'protectedVulnCnt' => 'ProtectedVulnCnt',
        'time' => 'Time',
        'unprotectedVulnCnt' => 'UnprotectedVulnCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protectedVulnCnt) {
            $res['ProtectedVulnCnt'] = $this->protectedVulnCnt;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->unprotectedVulnCnt) {
            $res['UnprotectedVulnCnt'] = $this->unprotectedVulnCnt;
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
        if (isset($map['ProtectedVulnCnt'])) {
            $model->protectedVulnCnt = $map['ProtectedVulnCnt'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['UnprotectedVulnCnt'])) {
            $model->unprotectedVulnCnt = $map['UnprotectedVulnCnt'];
        }

        return $model;
    }
}
