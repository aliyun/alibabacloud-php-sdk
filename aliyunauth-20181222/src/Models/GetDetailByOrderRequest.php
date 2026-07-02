<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models;

use AlibabaCloud\Dara\Model;

class GetDetailByOrderRequest extends Model
{
    /**
     * @var string
     */
    public $acceptor;

    /**
     * @var string
     */
    public $bizNo;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $checkAuthItems;

    /**
     * @var string
     */
    public $empId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $optSource;
    protected $_name = [
        'acceptor' => 'Acceptor',
        'bizNo' => 'BizNo',
        'channel' => 'Channel',
        'checkAuthItems' => 'CheckAuthItems',
        'empId' => 'EmpId',
        'language' => 'Language',
        'optSource' => 'OptSource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptor) {
            $res['Acceptor'] = $this->acceptor;
        }

        if (null !== $this->bizNo) {
            $res['BizNo'] = $this->bizNo;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->checkAuthItems) {
            $res['CheckAuthItems'] = $this->checkAuthItems;
        }

        if (null !== $this->empId) {
            $res['EmpId'] = $this->empId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->optSource) {
            $res['OptSource'] = $this->optSource;
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
        if (isset($map['Acceptor'])) {
            $model->acceptor = $map['Acceptor'];
        }

        if (isset($map['BizNo'])) {
            $model->bizNo = $map['BizNo'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['CheckAuthItems'])) {
            $model->checkAuthItems = $map['CheckAuthItems'];
        }

        if (isset($map['EmpId'])) {
            $model->empId = $map['EmpId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['OptSource'])) {
            $model->optSource = $map['OptSource'];
        }

        return $model;
    }
}
