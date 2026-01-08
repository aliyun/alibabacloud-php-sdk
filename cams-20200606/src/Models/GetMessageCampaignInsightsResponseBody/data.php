<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetMessageCampaignInsightsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dateStart;

    /**
     * @var string
     */
    public $dateStop;

    /**
     * @var string
     */
    public $marketingMessagesCostPerDelivered;

    /**
     * @var string
     */
    public $marketingMessagesCostPerLinkBtnClick;

    /**
     * @var string
     */
    public $marketingMessagesDelivered;

    /**
     * @var string
     */
    public $marketingMessagesDeliveryRate;

    /**
     * @var string
     */
    public $marketingMessagesLinkBtnClick;

    /**
     * @var string
     */
    public $marketingMessagesLinkBtnClickRate;

    /**
     * @var string
     */
    public $marketingMessagesReadRate;

    /**
     * @var string
     */
    public $marketingMessagesSpend;
    protected $_name = [
        'dateStart' => 'DateStart',
        'dateStop' => 'DateStop',
        'marketingMessagesCostPerDelivered' => 'MarketingMessagesCostPerDelivered',
        'marketingMessagesCostPerLinkBtnClick' => 'MarketingMessagesCostPerLinkBtnClick',
        'marketingMessagesDelivered' => 'MarketingMessagesDelivered',
        'marketingMessagesDeliveryRate' => 'MarketingMessagesDeliveryRate',
        'marketingMessagesLinkBtnClick' => 'MarketingMessagesLinkBtnClick',
        'marketingMessagesLinkBtnClickRate' => 'MarketingMessagesLinkBtnClickRate',
        'marketingMessagesReadRate' => 'MarketingMessagesReadRate',
        'marketingMessagesSpend' => 'MarketingMessagesSpend',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateStart) {
            $res['DateStart'] = $this->dateStart;
        }

        if (null !== $this->dateStop) {
            $res['DateStop'] = $this->dateStop;
        }

        if (null !== $this->marketingMessagesCostPerDelivered) {
            $res['MarketingMessagesCostPerDelivered'] = $this->marketingMessagesCostPerDelivered;
        }

        if (null !== $this->marketingMessagesCostPerLinkBtnClick) {
            $res['MarketingMessagesCostPerLinkBtnClick'] = $this->marketingMessagesCostPerLinkBtnClick;
        }

        if (null !== $this->marketingMessagesDelivered) {
            $res['MarketingMessagesDelivered'] = $this->marketingMessagesDelivered;
        }

        if (null !== $this->marketingMessagesDeliveryRate) {
            $res['MarketingMessagesDeliveryRate'] = $this->marketingMessagesDeliveryRate;
        }

        if (null !== $this->marketingMessagesLinkBtnClick) {
            $res['MarketingMessagesLinkBtnClick'] = $this->marketingMessagesLinkBtnClick;
        }

        if (null !== $this->marketingMessagesLinkBtnClickRate) {
            $res['MarketingMessagesLinkBtnClickRate'] = $this->marketingMessagesLinkBtnClickRate;
        }

        if (null !== $this->marketingMessagesReadRate) {
            $res['MarketingMessagesReadRate'] = $this->marketingMessagesReadRate;
        }

        if (null !== $this->marketingMessagesSpend) {
            $res['MarketingMessagesSpend'] = $this->marketingMessagesSpend;
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
        if (isset($map['DateStart'])) {
            $model->dateStart = $map['DateStart'];
        }

        if (isset($map['DateStop'])) {
            $model->dateStop = $map['DateStop'];
        }

        if (isset($map['MarketingMessagesCostPerDelivered'])) {
            $model->marketingMessagesCostPerDelivered = $map['MarketingMessagesCostPerDelivered'];
        }

        if (isset($map['MarketingMessagesCostPerLinkBtnClick'])) {
            $model->marketingMessagesCostPerLinkBtnClick = $map['MarketingMessagesCostPerLinkBtnClick'];
        }

        if (isset($map['MarketingMessagesDelivered'])) {
            $model->marketingMessagesDelivered = $map['MarketingMessagesDelivered'];
        }

        if (isset($map['MarketingMessagesDeliveryRate'])) {
            $model->marketingMessagesDeliveryRate = $map['MarketingMessagesDeliveryRate'];
        }

        if (isset($map['MarketingMessagesLinkBtnClick'])) {
            $model->marketingMessagesLinkBtnClick = $map['MarketingMessagesLinkBtnClick'];
        }

        if (isset($map['MarketingMessagesLinkBtnClickRate'])) {
            $model->marketingMessagesLinkBtnClickRate = $map['MarketingMessagesLinkBtnClickRate'];
        }

        if (isset($map['MarketingMessagesReadRate'])) {
            $model->marketingMessagesReadRate = $map['MarketingMessagesReadRate'];
        }

        if (isset($map['MarketingMessagesSpend'])) {
            $model->marketingMessagesSpend = $map['MarketingMessagesSpend'];
        }

        return $model;
    }
}
