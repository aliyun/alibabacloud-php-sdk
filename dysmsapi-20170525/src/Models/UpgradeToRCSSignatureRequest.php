<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class UpgradeToRCSSignatureRequest extends Model
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
     * @var string
     */
    public $signName;
    protected $_name = [
        'backgroundImage' => 'BackgroundImage',
        'bubbleColor' => 'BubbleColor',
        'category' => 'Category',
        'description' => 'Description',
        'latitude' => 'Latitude',
        'logo' => 'Logo',
        'longitude' => 'Longitude',
        'officeAddress' => 'OfficeAddress',
        'serviceEmail' => 'ServiceEmail',
        'servicePhone' => 'ServicePhone',
        'serviceTerms' => 'ServiceTerms',
        'serviceWebsite' => 'ServiceWebsite',
        'signName' => 'SignName',
    ];

    public function validate()
    {
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

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
