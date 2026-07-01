<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetRCSSignatureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetRCSSignatureResponseBody\data\registerResultList;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetRCSSignatureResponseBody\data\shelfResultList;

class data extends Model
{
    /**
     * @var string
     */
    public $backgroundImage;

    /**
     * @var string
     */
    public $bubbleColor;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $chatbotCode;

    /**
     * @var string
     */
    public $chatbotName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $logo;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $officeAddress;

    /**
     * @var registerResultList[]
     */
    public $registerResultList;

    /**
     * @var string
     */
    public $serviceEmail;

    /**
     * @var string
     */
    public $servicePhone;

    /**
     * @var string
     */
    public $serviceTerms;

    /**
     * @var string
     */
    public $serviceWebsite;

    /**
     * @var shelfResultList[]
     */
    public $shelfResultList;

    /**
     * @var int
     */
    public $signId;

    /**
     * @var string
     */
    public $signName;
    protected $_name = [
        'backgroundImage' => 'BackgroundImage',
        'bubbleColor' => 'BubbleColor',
        'category' => 'Category',
        'chatbotCode' => 'ChatbotCode',
        'chatbotName' => 'ChatbotName',
        'description' => 'Description',
        'latitude' => 'Latitude',
        'logo' => 'Logo',
        'longitude' => 'Longitude',
        'officeAddress' => 'OfficeAddress',
        'registerResultList' => 'RegisterResultList',
        'serviceEmail' => 'ServiceEmail',
        'servicePhone' => 'ServicePhone',
        'serviceTerms' => 'ServiceTerms',
        'serviceWebsite' => 'ServiceWebsite',
        'shelfResultList' => 'ShelfResultList',
        'signId' => 'SignId',
        'signName' => 'SignName',
    ];

    public function validate()
    {
        if (\is_array($this->registerResultList)) {
            Model::validateArray($this->registerResultList);
        }
        if (\is_array($this->shelfResultList)) {
            Model::validateArray($this->shelfResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundImage) {
            $res['BackgroundImage'] = $this->backgroundImage;
        }

        if (null !== $this->bubbleColor) {
            $res['BubbleColor'] = $this->bubbleColor;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->chatbotCode) {
            $res['ChatbotCode'] = $this->chatbotCode;
        }

        if (null !== $this->chatbotName) {
            $res['ChatbotName'] = $this->chatbotName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }

        if (null !== $this->logo) {
            $res['Logo'] = $this->logo;
        }

        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }

        if (null !== $this->officeAddress) {
            $res['OfficeAddress'] = $this->officeAddress;
        }

        if (null !== $this->registerResultList) {
            if (\is_array($this->registerResultList)) {
                $res['RegisterResultList'] = [];
                $n1 = 0;
                foreach ($this->registerResultList as $item1) {
                    $res['RegisterResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceEmail) {
            $res['ServiceEmail'] = $this->serviceEmail;
        }

        if (null !== $this->servicePhone) {
            $res['ServicePhone'] = $this->servicePhone;
        }

        if (null !== $this->serviceTerms) {
            $res['ServiceTerms'] = $this->serviceTerms;
        }

        if (null !== $this->serviceWebsite) {
            $res['ServiceWebsite'] = $this->serviceWebsite;
        }

        if (null !== $this->shelfResultList) {
            if (\is_array($this->shelfResultList)) {
                $res['ShelfResultList'] = [];
                $n1 = 0;
                foreach ($this->shelfResultList as $item1) {
                    $res['ShelfResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->signId) {
            $res['SignId'] = $this->signId;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
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
        if (isset($map['BackgroundImage'])) {
            $model->backgroundImage = $map['BackgroundImage'];
        }

        if (isset($map['BubbleColor'])) {
            $model->bubbleColor = $map['BubbleColor'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ChatbotCode'])) {
            $model->chatbotCode = $map['ChatbotCode'];
        }

        if (isset($map['ChatbotName'])) {
            $model->chatbotName = $map['ChatbotName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }

        if (isset($map['Logo'])) {
            $model->logo = $map['Logo'];
        }

        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }

        if (isset($map['OfficeAddress'])) {
            $model->officeAddress = $map['OfficeAddress'];
        }

        if (isset($map['RegisterResultList'])) {
            if (!empty($map['RegisterResultList'])) {
                $model->registerResultList = [];
                $n1 = 0;
                foreach ($map['RegisterResultList'] as $item1) {
                    $model->registerResultList[$n1] = registerResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceEmail'])) {
            $model->serviceEmail = $map['ServiceEmail'];
        }

        if (isset($map['ServicePhone'])) {
            $model->servicePhone = $map['ServicePhone'];
        }

        if (isset($map['ServiceTerms'])) {
            $model->serviceTerms = $map['ServiceTerms'];
        }

        if (isset($map['ServiceWebsite'])) {
            $model->serviceWebsite = $map['ServiceWebsite'];
        }

        if (isset($map['ShelfResultList'])) {
            if (!empty($map['ShelfResultList'])) {
                $model->shelfResultList = [];
                $n1 = 0;
                foreach ($map['ShelfResultList'] as $item1) {
                    $model->shelfResultList[$n1] = shelfResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SignId'])) {
            $model->signId = $map['SignId'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
