<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponseBody\data\channelConfigs;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponseBody\data\contact;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $categoryCode;

    /**
     * @var string
     */
    public $categoryDesc;

    /**
     * @var string
     */
    public $categoryGroupCode;

    /**
     * @var string
     */
    public $categoryGroupName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var channelConfigs[]
     */
    public $channelConfigs;

    /**
     * @var contact
     */
    public $contact;

    /**
     * @var int[]
     */
    public $receiveTimeList;
    protected $_name = [
        'aliUid' => 'AliUid',
        'categoryCode' => 'CategoryCode',
        'categoryDesc' => 'CategoryDesc',
        'categoryGroupCode' => 'CategoryGroupCode',
        'categoryGroupName' => 'CategoryGroupName',
        'categoryName' => 'CategoryName',
        'channelConfigs' => 'ChannelConfigs',
        'contact' => 'Contact',
        'receiveTimeList' => 'ReceiveTimeList',
    ];

    public function validate()
    {
        if (\is_array($this->channelConfigs)) {
            Model::validateArray($this->channelConfigs);
        }
        if (null !== $this->contact) {
            $this->contact->validate();
        }
        if (\is_array($this->receiveTimeList)) {
            Model::validateArray($this->receiveTimeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->categoryCode) {
            $res['CategoryCode'] = $this->categoryCode;
        }

        if (null !== $this->categoryDesc) {
            $res['CategoryDesc'] = $this->categoryDesc;
        }

        if (null !== $this->categoryGroupCode) {
            $res['CategoryGroupCode'] = $this->categoryGroupCode;
        }

        if (null !== $this->categoryGroupName) {
            $res['CategoryGroupName'] = $this->categoryGroupName;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->channelConfigs) {
            if (\is_array($this->channelConfigs)) {
                $res['ChannelConfigs'] = [];
                $n1 = 0;
                foreach ($this->channelConfigs as $item1) {
                    $res['ChannelConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contact) {
            $res['Contact'] = null !== $this->contact ? $this->contact->toArray($noStream) : $this->contact;
        }

        if (null !== $this->receiveTimeList) {
            if (\is_array($this->receiveTimeList)) {
                $res['ReceiveTimeList'] = [];
                $n1 = 0;
                foreach ($this->receiveTimeList as $item1) {
                    $res['ReceiveTimeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CategoryCode'])) {
            $model->categoryCode = $map['CategoryCode'];
        }

        if (isset($map['CategoryDesc'])) {
            $model->categoryDesc = $map['CategoryDesc'];
        }

        if (isset($map['CategoryGroupCode'])) {
            $model->categoryGroupCode = $map['CategoryGroupCode'];
        }

        if (isset($map['CategoryGroupName'])) {
            $model->categoryGroupName = $map['CategoryGroupName'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['ChannelConfigs'])) {
            if (!empty($map['ChannelConfigs'])) {
                $model->channelConfigs = [];
                $n1 = 0;
                foreach ($map['ChannelConfigs'] as $item1) {
                    $model->channelConfigs[$n1] = channelConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Contact'])) {
            $model->contact = contact::fromMap($map['Contact']);
        }

        if (isset($map['ReceiveTimeList'])) {
            if (!empty($map['ReceiveTimeList'])) {
                $model->receiveTimeList = [];
                $n1 = 0;
                foreach ($map['ReceiveTimeList'] as $item1) {
                    $model->receiveTimeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
