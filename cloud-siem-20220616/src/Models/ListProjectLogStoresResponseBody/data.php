<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListProjectLogStoresResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cn-hangzhou.log.aliyuncs.com
     *
     * @var string
     */
    public $endPoint;

    /**
     * @example hangzhou
     *
     * @var string
     */
    public $localName;

    /**
     * @example cloud-siem-logstore
     *
     * @var string
     */
    public $logStore;

    /**
     * @example 123XXXXXXXXX
     *
     * @var int
     */
    public $mainUserId;

    /**
     * @example cloud-siem-project
     *
     * @var string
     */
    public $project;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 123XXXXXXXX
     *
     * @var int
     */
    public $subUserId;

    /**
     * @example sas_account_xxxx
     *
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'endPoint'    => 'EndPoint',
        'localName'   => 'LocalName',
        'logStore'    => 'LogStore',
        'mainUserId'  => 'MainUserId',
        'project'     => 'Project',
        'regionId'    => 'RegionId',
        'subUserId'   => 'SubUserId',
        'subUserName' => 'SubUserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }
        if (null !== $this->subUserName) {
            $res['SubUserName'] = $this->subUserName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }
        if (isset($map['SubUserName'])) {
            $model->subUserName = $map['SubUserName'];
        }

        return $model;
    }
}
