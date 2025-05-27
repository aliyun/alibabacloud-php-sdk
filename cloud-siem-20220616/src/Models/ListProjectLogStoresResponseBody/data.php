<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListProjectLogStoresResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $logStore;

    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $subUserId;

    /**
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'endPoint' => 'EndPoint',
        'localName' => 'LocalName',
        'logStore' => 'LogStore',
        'mainUserId' => 'MainUserId',
        'project' => 'Project',
        'regionId' => 'RegionId',
        'subUserId' => 'SubUserId',
        'subUserName' => 'SubUserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
