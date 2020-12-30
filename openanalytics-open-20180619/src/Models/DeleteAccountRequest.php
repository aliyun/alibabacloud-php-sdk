<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccountRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var bool
     */
    public $isShort;

    /**
     * @var bool
     */
    public $isServiceUser;
    protected $_name = [
        'regionId'      => 'RegionId',
        'accountName'   => 'AccountName',
        'isShort'       => 'IsShort',
        'isServiceUser' => 'IsServiceUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->isShort) {
            $res['IsShort'] = $this->isShort;
        }
        if (null !== $this->isServiceUser) {
            $res['IsServiceUser'] = $this->isServiceUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['IsShort'])) {
            $model->isShort = $map['IsShort'];
        }
        if (isset($map['IsServiceUser'])) {
            $model->isServiceUser = $map['IsServiceUser'];
        }

        return $model;
    }
}
